<template>
    <div class="min-h-screen bg-background text-foreground">
        <Head>
            <title>Syntak - Building software</title>
        </Head>

        <SiteHeader />

        <main class="max-w-screen overflow-x-hidden px-2">
            <div class="mx-auto md:max-w-3xl">
                <ProfileCover />
                <ProfileHeader />
                <Separator />

                <Overview />
                <Separator />

                <SocialLinks />
                <Separator />

                <About />
                <Separator />

                <GitHubContributions />
                <Separator />

                <Projects />
                <Separator />

                <Brand />
                <Separator />
            </div>
        </main>

        <SiteFooter />
    </div>
</template>

<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import SiteHeader from "@/Components/Profile/SiteHeader.vue";
import ProfileCover from "@/Components/Profile/ProfileCover.vue";
import ProfileHeader from "@/Components/Profile/ProfileHeader.vue";
import Overview from "@/Components/Profile/Overview.vue";
import SocialLinks from "@/Components/Profile/SocialLinks.vue";
import About from "@/Components/Profile/About.vue";
import GitHubContributions from "@/Components/Profile/GitHubContributions.vue";
import Projects from "@/Components/Profile/Projects.vue";
import Brand from "@/Components/Profile/Brand.vue";
import Separator from "@/Components/Profile/Separator.vue";
import SiteFooter from "@/Components/Profile/SiteFooter.vue";
</script>
