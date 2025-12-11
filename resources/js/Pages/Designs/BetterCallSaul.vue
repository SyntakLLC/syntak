<template>
    <Head>
        <title>Better Call Saul</title>
    </Head>
    <div class="min-h-screen bg-[#fae126] overflow-x-hidden">
        <!-- Header Section -->
        <header>
            <!-- Red Top Banner -->
            <div class="bg-[#d82d2c] py-3 px-8 flex justify-center">
                <span
                    class="text-[#FFD700] text-xl font-bold uppercase tracking-wide flash-text"
                    style="
                        font-family: 'Arial Black', Impact, sans-serif;
                        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
                    ">
                    In Legal Trouble?
                </span>
            </div>

            <!-- Main Header Area -->
            <div
                class="bg-[#fae126] flex flex-col lg:flex-row items-center justify-between px-4 sm:px-8 py-4 gap-4">
                <!-- Left: Better Call Saul Script -->
                <div class="lg:w-1/4 text-center lg:text-left">
                    <span
                        class="text-[#d82d2c] text-3xl sm:text-4xl lg:text-6xl"
                        style="
                            font-family: 'Brush Script MT', 'Segoe Script',
                                cursive;
                            font-style: italic;
                        ">
                        "Better Call Saul!"
                    </span>
                </div>

                <!-- Center: Logo -->
                <div class="text-center flex-1 order-first lg:order-none">
                    <div
                        class="text-[#2D2D2D] text-3xl sm:text-4xl lg:text-5xl font-bold tracking-wide inline-flex items-center justify-center"
                        style="font-family: 'Times New Roman', Georgia, serif">
                        <span>SAUL G</span>
                        <span class="relative mx-0">
                            <span class="opacity-0">O</span>
                            <!-- Scales of Justice Icon inside O -->
                            <svg
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-7 h-7 sm:w-9 sm:h-9 lg:w-11 lg:h-11"
                                viewBox="0 0 100 100">
                                <!-- O circle -->
                                <circle
                                    cx="50"
                                    cy="50"
                                    r="42"
                                    fill="none"
                                    stroke="#2D2D2D"
                                    stroke-width="8" />
                                <!-- Scales -->
                                <g
                                    fill="#DAA520"
                                    stroke="#8B7500"
                                    stroke-width="1">
                                    <!-- Center pole -->
                                    <rect
                                        x="48"
                                        y="25"
                                        width="4"
                                        height="50"
                                        fill="#DAA520" />
                                    <!-- Top beam -->
                                    <rect
                                        x="25"
                                        y="30"
                                        width="50"
                                        height="4"
                                        fill="#DAA520" />
                                    <!-- Left pan -->
                                    <path
                                        d="M25 34 L20 50 L30 50 Z"
                                        fill="#DAA520" />
                                    <ellipse
                                        cx="25"
                                        cy="52"
                                        rx="12"
                                        ry="4"
                                        fill="#DAA520" />
                                    <!-- Right pan -->
                                    <path
                                        d="M75 34 L70 50 L80 50 Z"
                                        fill="#DAA520" />
                                    <ellipse
                                        cx="75"
                                        cy="52"
                                        rx="12"
                                        ry="4"
                                        fill="#DAA520" />
                                    <!-- Base -->
                                    <rect
                                        x="35"
                                        y="72"
                                        width="30"
                                        height="6"
                                        fill="#DAA520" />
                                </g>
                            </svg>
                        </span>
                        <span>ODMAN</span>
                    </div>
                    <div
                        class="text-[#2D2D2D] text-lg tracking-[0.4em] mt-1"
                        style="font-family: 'Times New Roman', Georgia, serif">
                        ATTORNEY AT LAW
                    </div>
                </div>

                <!-- Right: Phone Number -->
                <div class="text-center lg:text-right lg:w-1/4">
                    <div
                        class="text-[#d82d2c] text-2xl sm:text-3xl lg:text-5xl font-extrabold pulse flash-glow"
                        style="
                            font-family: 'Arial Black', Impact, sans-serif;
                            text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.2);
                        ">
                        (505) 503-4455
                    </div>
                    <div
                        class="text-[#2D2D2D] font-bold text-base sm:text-lg lg:text-xl mt-1 blink"
                        style="font-family: Arial, sans-serif">
                        CALL SAUL NOW!
                    </div>
                </div>
            </div>

            <!-- Red line separator -->
            <div class="h-1 bg-[#d82d2c]"></div>

            <!-- Sub-header Banner -->
            <div class="bg-[#fae126] py-3 text-center px-4">
                <span
                    class="text-lg sm:text-xl lg:text-3xl font-bold uppercase"
                    style="font-family: 'Arial Black', Impact, sans-serif">
                    <span class="text-[#00CED1]">NOT TOLL FREE</span>
                    <span class="text-[#d82d2c]">•</span>
                    <span class="text-[#d82d2c]">SE HABLA ESPAÑOL</span>
                </span>
            </div>

            <!-- Red line separator -->
            <div class="h-1 bg-[#d82d2c]"></div>
        </header>

        <!-- Navigation -->
        <nav class="flex flex-wrap justify-center gap-2 sm:gap-4 lg:gap-8 py-4 lg:py-5 bg-[#fae126] px-4">
            <button
                v-for="item in [
                    'SERVICES',
                    'ABOUT SAUL',
                    'TESTIMONIALS',
                    'CONTACT',
                ]"
                :key="item"
                class="nav-button px-4 sm:px-6 lg:px-10 py-2 lg:py-3 rounded-full font-bold text-sm sm:text-base lg:text-xl text-[#2D2D2D] border-2 lg:border-4 border-[#6B4513]"
                style="font-family: 'Times New Roman', Georgia, serif">
                {{ item }}
            </button>
        </nav>

        <!-- Main Content Area -->
        <main class="relative bg-[#fae126] px-4 sm:px-8 pb-12 pt-4">
            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center lg:items-start gap-8 lg:gap-0">
                <!-- Left Side: Saul Image with Fast Cash badge -->
                <div class="relative w-full max-w-[280px] sm:max-w-[320px] lg:max-w-none lg:w-[380px] shrink-0 lg:self-end order-2 lg:order-none">
                    <!-- Fast Cash Starburst Badge -->
                    <div class="absolute top-2 left-2 sm:top-4 sm:left-4 z-20 -rotate-12">
                        <div
                            class="starburst-10 w-[80px] h-[80px] sm:w-[100px] sm:h-[100px] lg:w-[120px] lg:h-[120px] bg-[#7CFC00] flex items-center justify-center">
                            <span
                                class="text-[#d82d2c] font-bold text-base sm:text-xl lg:text-2xl italic text-center leading-none"
                                style="
                                    font-family: 'Arial Black', Impact,
                                        sans-serif;
                                    transform: rotate(-5deg);
                                ">
                                FAST
                                <br />
                                CASH
                            </span>
                        </div>
                    </div>

                    <!-- Saul Image -->
                    <img
                        src="../../../designs/BetterCallSaul/saul-goodman.png"
                        alt="Saul Goodman pointing"
                        class="w-full h-auto relative z-10"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                </div>

                <!-- Center Content -->
                <div
                    class="flex-1 text-center px-4 sm:px-8 pt-4 flex flex-col items-center order-1 lg:order-none">
                    <!-- No Fees Until We Win - Top -->
                    <div class="mb-4">
                        <div
                            class="text-3xl sm:text-4xl lg:text-6xl font-extrabold leading-none"
                            style="
                                font-family: 'Arial Black', Impact, sans-serif;
                                color: #e91e8b;
                                text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
                            ">
                            DID YOU KNOW
                        </div>
                        <div
                            class="text-2xl sm:text-3xl lg:text-4xl font-bold mt-2"
                            style="
                                font-family: 'Arial Black', Impact, sans-serif;
                                color: #1a1a4e;
                            ">
                            YOU HAVE RIGHTS?
                        </div>
                    </div>

                    <!-- Description Text -->
                    <div
                        class="max-w-[320px] my-4 lg:my-6 text-[#333333] text-sm sm:text-base leading-relaxed text-center"
                        style="font-family: 'Times New Roman', Georgia, serif">
                        The constitution says you do!
                        Saul Goodman is a criminal defense attorney who works to
                        fight for YOUR rights. When the system is stacked
                        against you, Saul levels the playing field. Don't let
                        the prosecution push you around. Call Saul today for a
                        free consultation.
                    </div>

                    <div class="mt-auto pt-4 lg:pt-8">
                        <div
                            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-none"
                            style="
                                font-family: 'Arial Black', Impact, sans-serif;
                                color: #e91e8b;
                                text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
                            ">
                            NO FEES
                        </div>
                        <div
                            class="text-xl sm:text-2xl lg:text-3xl font-bold mt-1 stroke-text"
                            style="
                                font-family: 'Arial Black', Impact, sans-serif;
                            ">
                            UNTIL
                        </div>
                        <div
                            class="text-xl sm:text-2xl lg:text-3xl font-bold stroke-text"
                            style="
                                font-family: 'Arial Black', Impact, sans-serif;
                            ">
                            WE WIN
                        </div>
                    </div>
                </div>

                <!-- Right Side: Contact Form -->
                <div class="relative w-full max-w-[320px] lg:w-[320px] shrink-0 order-3">
                    <!-- No Fees Consultation Starburst Badge -->
                    <div class="absolute -top-4 right-0 z-20 rotate-12 hidden sm:block">
                        <div
                            class="starburst-10 w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] bg-[#E91E8B] flex items-center justify-center">
                            <span
                                class="text-[#FFD700] font-bold text-xs sm:text-sm text-center leading-tight"
                                style="
                                    font-family: 'Arial Black', Impact,
                                        sans-serif;
                                    transform: rotate(-8deg);
                                ">
                                NO FEES
                                <br />
                                CONSULTATION!
                            </span>
                        </div>
                    </div>

                    <!-- Contact Form Box -->
                    <div class="bg-white shadow-xl p-4 sm:p-6 mt-0 sm:mt-20">
                        <h3
                            class="text-[#333333] text-xl sm:text-2xl font-bold mb-4 sm:mb-5"
                            style="font-family: Arial, sans-serif">
                            CONTACT
                        </h3>

                        <form class="space-y-3 sm:space-y-4">
                            <input
                                type="text"
                                placeholder="Name"
                                class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-[#CCCCCC] text-sm sm:text-base focus:outline-none focus:border-[#DAA520]"
                                style="font-family: Arial, sans-serif" />
                            <input
                                type="email"
                                placeholder="Email"
                                class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-[#CCCCCC] text-sm sm:text-base focus:outline-none focus:border-[#DAA520]"
                                style="font-family: Arial, sans-serif" />
                            <textarea
                                placeholder="Message"
                                rows="4"
                                class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-[#CCCCCC] text-sm sm:text-base resize-none focus:outline-none focus:border-[#DAA520]"
                                style="
                                    font-family: Arial, sans-serif;
                                "></textarea>
                            <button
                                type="submit"
                                class="w-full py-3 sm:py-4 font-bold text-[#333333] text-lg sm:text-xl border-2 border-[#B8860B] shadow-md hover:brightness-110 transition-all"
                                style="
                                    background: linear-gradient(
                                        180deg,
                                        #ffd700 0%,
                                        #ffa500 100%
                                    );
                                    font-family: Arial, sans-serif;
                                ">
                                SUBMIT
                            </button>
                        </form>
                    </div>

                    <!-- Free Consultation Text -->
                    <div class="text-center lg:text-right mt-4 lg:mt-6 lg:mr-4">
                        <div
                            class="text-2xl sm:text-3xl lg:text-4xl font-extrabold leading-none"
                            style="
                                font-family: 'Arial Black', Impact, sans-serif;
                                color: #e91e8b;
                                text-shadow: 3px 3px 0 #000;
                            ">
                            FREE
                        </div>
                        <div
                            class="text-xl sm:text-2xl lg:text-3xl font-extrabold leading-tight"
                            style="
                                font-family: 'Arial Black', Impact, sans-serif;
                                color: #00ced1;
                                text-shadow: 3px 3px 0 #000;
                            ">
                            CONSULTATION!
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer
            class="bg-[#4A0E0E] py-4 px-4 sm:px-8 flex flex-col sm:flex-row items-center justify-between gap-3 sm:gap-0">
            <span
                class="text-[#F5F5F5] text-xs sm:text-sm text-center"
                style="font-family: Arial, sans-serif">
                © 2009 Saul Goodman & Associates
            </span>

            <div class="flex items-center gap-3 sm:gap-4">
                <!-- Facebook -->
                <a
                    href="#"
                    class="w-8 h-8 sm:w-10 sm:h-10 bg-[#1877F2] rounded-md flex items-center justify-center hover:opacity-80 transition-opacity">
                    <svg
                        class="w-4 h-4 sm:w-6 sm:h-6 text-white"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                </a>
                <!-- Instagram -->
                <a
                    href="#"
                    class="w-8 h-8 sm:w-10 sm:h-10 rounded-md flex items-center justify-center hover:opacity-80 transition-opacity"
                    style="
                        background: linear-gradient(
                            45deg,
                            #f09433 0%,
                            #e6683c 25%,
                            #dc2743 50%,
                            #cc2366 75%,
                            #bc1888 100%
                        );
                    ">
                    <svg
                        class="w-4 h-4 sm:w-6 sm:h-6 text-white"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                    </svg>
                </a>
                <!-- YouTube -->
                <a
                    href="#"
                    class="w-8 h-8 sm:w-10 sm:h-10 bg-[#FF0000] rounded-md flex items-center justify-center hover:opacity-80 transition-opacity">
                    <svg
                        class="w-4 h-4 sm:w-6 sm:h-6 text-white"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>

                <!-- Decorative Star -->
                <span class="text-[#FFD700] text-xl sm:text-2xl ml-1">★</span>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
</script>

<style scoped>
.nav-button {
    background: linear-gradient(180deg, #fff8dc 0%, #f5deb3 20%, #daa520 80%, #b8860b 100%);
    box-shadow: inset 0 2px 4px rgba(255, 255, 255, 0.6),
        inset 0 -2px 4px rgba(0, 0, 0, 0.2), 4px 4px 8px rgba(0, 0, 0, 0.4);
    text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5);
}

.nav-button:hover {
    filter: brightness(1.05);
}

.starburst-10 {
    clip-path: polygon(
        50% 0%, 63% 25%, 95% 20%, 75% 45%, 100% 65%, 70% 65%,
        65% 100%, 50% 75%, 35% 100%, 30% 65%, 0% 65%, 25% 45%, 5% 20%, 37% 25%
    );
    filter: drop-shadow(3px 3px 4px rgba(0, 0, 0, 0.4));
}

.stroke-text {
    color: #ffd700;
    text-shadow: -2px -2px 0 #1a1a4e, 2px -2px 0 #1a1a4e, -2px 2px 0 #1a1a4e,
        2px 2px 0 #1a1a4e, 3px 3px 0 #1a1a4e;
}

@keyframes flash-text {
    0%, 50% { color: #d82d2c; }
    51%, 100% { color: #FFD700; }
}

@keyframes blink {
    0%, 49% { opacity: 1; }
    50%, 100% { opacity: 0; }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.15); }
}

@keyframes flash-glow {
    0%, 50% { text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000, 0 0 30px #ff0000; }
    51%, 100% { text-shadow: 0 0 10px #ffff00, 0 0 20px #ffff00, 0 0 30px #ffff00; }
}

.flash-text {
    animation: flash-text 0.3s infinite;
}

.blink {
    animation: blink 0.5s infinite;
}

.pulse {
    animation: pulse 0.5s ease-in-out infinite;
}

.flash-glow {
    animation: flash-glow 0.3s infinite;
}
</style>
