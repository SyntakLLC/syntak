<template>
    <div class="relative overflow-hidden text-left mask-fade">
        <transition-group name="slide-out">
            <span
                :key="`${before}_before`"
                class="inline-flex self-center text-center"
                >{{ before }}</span
            >
            <span
                class="inline-flex self-center text-center"
                v-for="(char, index) in formattedValue"
                :key="`${char}_${index}`"
            >
                {{ char }}
            </span>
            <span
                :key="`${after}_after`"
                class="inline-flex self-center text-center"
                >{{ after }}</span
            >
        </transition-group>
    </div>
</template>

<script>
export default {
    name: "MechanicalCounter",

    mounted() {
        setTimeout(this.typingEffect, 1500);
    },

    props: {
        start: {
            type: Number,
            required: true,
        },
        end: {
            type: Number,
            required: true,
        },
        before: {
            type: String,
            default: "",
        },
        after: {
            type: String,
            default: "",
        },
        isPrice: {
            type: Boolean,
            default: false,
        },
        continuous: {
            type: Boolean,
            default: false,
        },
    },

    computed: {
        formattedValue() {
            if (this.isPrice) {
                return this.formatPrice(this.currentValue).split("");
            }

            return this.currentValue.toString().split("");
        },
    },

    data() {
        return {
            currentValue: this.start,
        };
    },

    watch: {
        start() {
            this.currentValue = this.start;
            setTimeout(this.typingEffect);
        },
    },

    methods: {
        /**
         * This method will determine which effect to use based on the
         * continuous prop.
         */
        typingEffect() {
            if (this.continuous) {
                this.continuousEffect();
            } else {
                this.robinhoodEffect();
            }
        },

        /**
         * This effect will count from the start to the end value
         * continuously, rather than just switching to the end value.
         */
        continuousEffect() {
            const startPrice = this.start;
            const endPrice = this.end;
            const duration = 1000;
            const startTime = Date.now();

            // Number of frames to skip before showing one. This helps the effect feel smoother.
            // (Adjustable)
            const skipFrames = 10;
            let frameCount = 0;

            const updateHeading = () => {
                frameCount++;

                // Only show frame when we've counted past skipFrames
                if (frameCount <= skipFrames) {
                    requestAnimationFrame(updateHeading);
                    return;
                }

                // Reset counter after showing a frame
                frameCount = 0;

                const elapsed = Date.now() - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const easedProgress = this.easeInOutPower(progress, 8);

                this.currentValue = Number(
                    (
                        startPrice -
                        (startPrice - endPrice) * easedProgress
                    ).toFixed(0)
                );

                if (progress < 1) {
                    requestAnimationFrame(updateHeading);
                }
            };

            updateHeading();
        },

        /**
         * This effect will switch to the end value immediately.
         */
        robinhoodEffect() {
            this.currentValue = this.end;
        },

        formatPrice(price) {
            return price.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        },

        easeInOutPower(t, power) {
            if (t === 0) return 0;
            if (t === 1) return 1;
            if ((t /= 0.5) < 1) return 0.5 * Math.pow(t, power);
            return 0.5 * (2 - Math.pow(2, -power * (t - 1)));
        },
    },
};
</script>

<style scoped>
.slide-out-move,
.slide-out-enter-active,
.slide-out-leave-active {
    transition: all 0.3s ease;
}

.slide-out-enter-from {
    transform: translateY(-60px);
}

.slide-out-leave-to {
    transform: translateY(60px);
}

.slide-out-leave-active {
    position: absolute;
    top: 0;
}

.mask-fade {
    -webkit-mask-image: linear-gradient(
        180deg,
        transparent 0%,
        black 15%,
        black 85%,
        transparent 100%
    );
    mask-image: linear-gradient(
        180deg,
        transparent 0%,
        black 15%,
        black 85%,
        transparent 100%
    );
}
</style>
