const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        colors: {
            brand: colors.pink,
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            slate: colors.slate,
            gray: colors.gray,
            green: colors.green,
            indigo: colors.indigo,
            yellow: colors.yellow,
            red: colors.red,
            blue: colors.blue,
            violet: colors.violet,
            orange: colors.orange,
            pink: colors.pink,
            rose: colors.rose,
        },
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['Lexend', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
