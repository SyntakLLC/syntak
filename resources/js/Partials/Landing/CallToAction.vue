<template>
    <div class="relative w-full h-screen bg-secondary space-y-16 overflow-hidden">
        <div class="w-full px-24 -mt-10 text-white z-0">
            <div id="notedly-end" class="relative rounded-b-3xl overflow-hidden glow-purple-large" :style="{ transform: `perspective(700px) rotateX(${rotation}deg)` }">
                <div class="border-pulse rounded-b-3xl">
                    <img src="https://i.imgur.com/QUnzCg6.png"
                         class="relative object-cover rounded-b-3xl w-full h-full z-10"
                         alt="Notedly AI User Interface" />
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="heading-xl pb-6 text-5xl">Once-in-a-lifetime ideas.</div>
            <div class="heading-sm text-center text-white">They deserve once-in-a-lifetime websites.</div>
        </div>

<!--        <div class="relative  bg-gradient-to-t from-transparent via-[#18162e] to-[#18162e] w-full top-0 h-12" />-->
    </div>
</template>

<script>
export default {
    name: "CallToAction",

    created () {
        window.addEventListener('scroll', this.handleScroll2);
    },

    unmounted () {
        window.removeEventListener('scroll', this.handleScroll2);
    },

    data() {
        return {
            rotation: 10,
        };
    },

    methods: {
        handleScroll2() {
            // console.log("HERE")
            const element = document.getElementById('notedly-end');
            const height = element.offsetTop - window.scrollY;
            const rotationValue = ((height) / -50) - 42;
            const scaleValue = height / -250;
            // console.log(rotationValue, scaleValue)
            //
            if (rotationValue > 0) {
                this.rotation = rotationValue;
                element.style.transform = `perspective(500px) rotateX(${rotationValue}deg)`;
                console.log(element.style.transform)
            } else {
                this.rotation = 0;
            }
            //
            // if (scaleValue > 0) {
            //     this.element.scale = scaleValue + '%';
            // }
        },
    },
}
</script>

<style scoped>
.glow-purple-large {
    box-shadow: 0 0 200px rgba(110, 103, 238, 0.2);
}
.glow-purple {
    box-shadow: 0 0 200px rgb(110 103 238);
}
</style>
