<template>
    <div class="inset-x-0 -z-10 bg-gradient shadow-lg ring-1 ring-gray-900/5 min-h-screen">
        <!--
         The below element contains the actual content of our navigation window.
         The parent div is wider because it has the blue gradient, which looks
         better on a larger div (therefore, `h-screen`).

         We use this element's height to dynamically set where the website content
         scrolls down to when the navbar is opened.
         -->
        <div id="actual-size-of-navigation-window"
             class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-6 py-10 lg:grid-cols-2 lg:px-8">
            <div class="grid grid-cols-2 gap-x-6 sm:gap-x-8">

                <div>
                    <h3 class="heading-sm font-display">Recent Work</h3>
                    <div class="mt-6 flow-root">
                        <div class="-my-2">
                            <a v-for="item in recentProjects" :key="item.name" :href="item.href" target="_blank"
                               class="group flex items-center gap-x-2 py-2 text-secondary-semibold">
                                <img class="w-4 h-4 group-hover:w-5 group-hover:h-5 transition-all rounded-full object-cover shadow-md" alt="Logo" :src="item.icon" />
                                {{ item.name }}
                                <HoverArrow color="primary" class="opacity-0 group-hover:opacity-100" />
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="heading-sm font-display">Social</h3>
                    <div class="mt-6 flow-root">
                        <div class="-my-2">
                            <a v-for="item in socialLinks" :key="item.name" :href="item.href" target="_blank"
                               class="group flex items-center gap-x-2 py-2 text-secondary-semibold">
                                {{ item.name }}
                                <HoverArrow color="primary" class="opacity-0 group-hover:opacity-100" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-10 sm:gap-8 lg:grid-cols-2">
                <h3 class="sr-only">Recent posts</h3>
                <article v-for="post in recentPosts" :key="post.id"
                         class="relative isolate flex max-w-2xl flex-col gap-x-8 gap-y-6 sm:flex-row sm:items-start lg:flex-col lg:items-stretch">
                    <div class="relative flex-none">
                        <img
                            class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-lg object-cover sm:aspect-[16/9] sm:h-32 lg:h-auto"
                            :src="post.imageUrl" alt=""/>
                        <div class="absolute inset-0 rounded-lg ring-1 ring-inset ring-gray-900/10"/>
                    </div>
                    <div>
                        <div class="flex items-center gap-x-4">
                            <time :datetime="post.datetime" class="text-secondary">
                                {{ post.date }}
                            </time>
<!--                            <a :href="post.category.href"-->
<!--                               class="relative z-10 rounded-full bg-white/50 px-2.5 py-1 text-xs font-medium text-gray-600 hover:bg-gray-100">-->
<!--                                {{ post.category.title }}-->
<!--                            </a>-->
                        </div>
                        <h4 class="mt-2 text-secondary-semibold">
                            <a :href="post.href">
                                <span class="absolute inset-0"/>
                                {{ post.title }}
                            </a>
                        </h4>
                        <p class="mt-2 text-secondary">{{ post.description }}</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</template>

<script>
import {recentPosts, recentProjects, socialLinks} from "@/config/navigation";
import HoverArrow from "@/Components/Decoration/HoverArrow.vue";

export default {
    name: "NavigationBar",

    components: {HoverArrow},

    props: {
        contentIdName: {
            type: String,
            default: 'content'
        },
        open: {
            type: Boolean,
            default: false,
        }
    },

    setup() {
        return {
            recentPosts,
            socialLinks,
            recentProjects,
        }
    },

    mounted() {
        if (!!this.open) {
            this.openNavigation();
        } else {
            this.closeNavigation();
        }
    },

    methods: {
        openNavigation() {
            const content = document.getElementById(this.contentIdName);
            const navigationWindow = document.getElementById('actual-size-of-navigation-window');
            if (content && navigationWindow) {
                content.style.transform = `translateY(${navigationWindow.getBoundingClientRect().height}px)`;
            }
        },

        closeNavigation() {
            const content = document.getElementById(this.contentIdName);
            if (content) {
                content.style.transform = 'translateY(0px)';
            }
        },
    },

    watch: {
        open(newVal, _) {
            if (!!newVal) {
                this.openNavigation();
            } else {
                this.closeNavigation();
            }
        }
    }
}
</script>
