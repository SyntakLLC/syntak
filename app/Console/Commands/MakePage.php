<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakePage extends Command
{
    protected $signature = 'make:page {pageName} {--auth} {--resource}';
    protected $description = 'Create a new page with Inertia.js component and Laravel controller.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $pageName = $this->argument('pageName');
        $isAuth = $this->option('auth');
        $isResource = $this->option('resource');

        if ($isResource) {
            $this->generateResourceFiles($pageName, $isAuth);
        } else {
            $this->generateSingleFile($pageName, $isAuth);
        }

        $this->info("Page '{$pageName}' created successfully!");
    }

    protected function generateSingleFile($pageName, $isAuth)
    {
        $vueFileName = "resources/js/Pages/{$pageName}.vue";
        $controllerFileName = "app/Http/Controllers/{$pageName}Controller.php";
        $routeDefinition = $this->getSingleFileRouteDefinition($pageName);

        // Create the Vue component file
        File::ensureDirectoryExists(dirname($vueFileName));
        File::put($vueFileName, $this->generateVueTemplate($pageName));

        // Create the Laravel controller file
        File::put($controllerFileName, $this->generateSingleControllerTemplate($pageName, $isAuth));

        // Update the routes/web.php file
        $this->updateRoutesFile($pageName, $routeDefinition);
    }

    protected function generateResourceFiles($pageName, $isAuth)
    {
        $folderName = "resources/js/Pages/{$pageName}";
        File::ensureDirectoryExists($folderName);

        $vueFiles = ['Index.vue', 'Create.vue', 'Show.vue'];
        foreach ($vueFiles as $vueFile) {
            $vueFileName = "{$folderName}/{$vueFile}";
            File::put($vueFileName, $this->generateVueTemplate($vueFile));
        }

        $controllerFileName = "app/Http/Controllers/{$pageName}Controller.php";
        $routeDefinition = $this->getResourceRouteDefinition($pageName);

        // Create the Laravel controller file
        File::put($controllerFileName, $this->generateResourceControllerTemplate($pageName, $isAuth));

        // Update the routes/web.php file
        $this->updateRoutesFile($pageName, $routeDefinition);
    }

    protected function generateVueTemplate($vueFile): string
    {
        $fileName = str_replace(".vue", "", $vueFile);
        return "<template>\n</template>\n\n<script>\nexport default {\n    name: \"{$fileName}\",\n}\n</script>";
    }

    protected function generateSingleControllerTemplate($pageName, $isAuth): string
    {
        return "<?php\n\nnamespace App\Http\Controllers;\n\nuse Inertia\Inertia;\n\nclass {$pageName}Controller extends Controller\n{\n    public function __invoke()\n    {\n        return Inertia::render('{$pageName}');\n    }\n}";
    }

    protected function generateResourceControllerTemplate($pageName, $isAuth): string
    {
        return "<?php\n\nnamespace App\Http\Controllers;\n\nuse Illuminate\Http\Request;\nuse Inertia\Inertia;\n\nclass {$pageName}Controller extends Controller\n{\n    public function index()\n    {\n        return Inertia::render('{$pageName}/Index');\n    }\n\n    public function create()\n    {\n        return Inertia::render('{$pageName}/Create');\n    }\n\n    public function store(Request \$request)\n    {\n        //\n    }\n\n    public function show(\$id)\n    {\n        return Inertia::render('{$pageName}/Show');\n    }\n\n    public function edit(\$id)\n    {\n        //\n    }\n\n    public function update(Request \$request, \$id)\n    {\n        //\n    }\n\n    public function destroy(\$id)\n    {\n        //\n    }\n}";
    }

    protected function updateRoutesFile($pageName, $routeDefinition)
    {
        $routesFile = base_path('routes/web.php');
        $content = file_get_contents($routesFile);

        // Add the new route definition
        $content = preg_replace("/(use [^;]+;)(?!.*use [^;]+;)/s", "$1\nuse App\Http\Controllers\\{$pageName}Controller;", $content);

        if ($this->option('auth')) {
            $content = preg_replace("/(Route::middleware\(\[\n[^\]]+\n\]\)->group\(function \(\) \{)([^\}]+)(\}\);)/s", "$1$2    {$routeDefinition}\n$3", $content);
        } else {
            $content .= "\n{$routeDefinition}\n";
        }

        file_put_contents($routesFile, $content);
    }

    protected function getSingleFileRouteDefinition($pageName)
    {
        $lowercase_name = $this->formatName($pageName);
        return "Route::get('/$lowercase_name', {$pageName}Controller::class)->name('$lowercase_name');";
    }

    protected function getResourceRouteDefinition($pageName)
    {
        $lowercase_name = $this->formatName($pageName);
        return "Route::resource('$lowercase_name', {$pageName}Controller::class);";
    }

    protected function formatName($input): string
    {
        $output = preg_replace('/(?!^)[A-Z]/', '-$0', $input);
        return strtolower($output);
    }
}
