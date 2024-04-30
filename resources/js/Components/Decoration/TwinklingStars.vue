<template>
    <div class="star-field">
        <div class="z-0">
            <div class="star-1 blur-xs twinkle"></div>
            <div class="star-2 blur-xs twinkle"></div>
            <div class="star-3 blur-xs twinkle"></div>
            <div class="star-4 blur-xs twinkle"></div>
            <div class="star-5 blur-xs twinkle"></div>
            <div class="star-6 blur-xs twinkle"></div>
            <div class="star-7 blur-xs twinkle"></div>
            <div class="star-8 blur-xs twinkle"></div>
            <div class="star-9 blur-xs twinkle"></div>
            <div class="star-10 blur-xs twinkle"></div>
            <div class="star-11 blur-xs twinkle"></div>
            <div class="star-12 blur-xs twinkle"></div>
            <div class="star-13 blur-xs twinkle"></div>
            <div class="star-14 blur-xs twinkle"></div>
            <div class="star-15 blur-xs twinkle"></div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'TwinklingStars',
};
</script>
<style scoped lang="css">
@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.star-field {
    position: relative;
    width: 100%;
    height: 100%;
    animation: rotate 1000s linear infinite;
}

@keyframes twinkle {
    0% {
        opacity: 1;
    }
    50% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.twinkle {
    animation: twinkle 6s infinite;
}

.star-1 {
    animation-delay: 0.1s;
}
.star-2 {
    animation-delay: 0.3s;
}
.star-3 {
    animation-delay: 0.5s;
}
.star-4 {
    animation-delay: 0.7s;
}
.star-5 {
    animation-delay: 0.9s;
}
.star-6 {
    animation-delay: 1.1s;
}
.star-7 {
    animation-delay: 1.3s;
}
.star-8 {
    animation-delay: 1.5s;
}
.star-9 {
    animation-delay: 1.7s;
}
.star-10 {
    animation-delay: 1.9s;
}
.star-11 {
    animation-delay: 2.1s;
}
.star-12 {
    animation-delay: 2.3s;
}
.star-13 {
    animation-delay: 2.5s;
}
.star-14 {
    animation-delay: 2.7s;
}
.star-15 {
    animation-delay: 2.9s;
}

/* ... (existing styles) ... */

html,
body {
    height: 100%;
    overflow: hidden;
    background-color: #000;
}
.star-1 {
    position: absolute;
    top: 111px;
    left: 12%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-1:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-2 {
    position: absolute;
    top: 278px;
    left: 32%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-2:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-3 {
    position: absolute;
    top: 271px;
    left: 82%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-3:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-4 {
    position: absolute;
    top: 61px;
    left: 38%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-4:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-5 {
    position: absolute;
    top: 132px;
    left: 36%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-5:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-6 {
    position: absolute;
    top: 220px;
    left: 80%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-6:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-7 {
    position: absolute;
    top: 213px;
    left: 29%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-7:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-8 {
    position: absolute;
    top: 58px;
    left: 56%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-8:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-9 {
    position: absolute;
    top: 290px;
    left: 67%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-9:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-10 {
    position: absolute;
    top: 96px;
    left: 46%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-10:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-11 {
    position: absolute;
    top: 203px;
    left: 37%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-11:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-12 {
    position: absolute;
    top: 150px;
    left: 98%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-12:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-13 {
    position: absolute;
    top: 151px;
    left: 83%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-13:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-14 {
    position: absolute;
    top: 284px;
    left: 36%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-14:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
.star-15 {
    position: absolute;
    top: 149px;
    left: 49%;
    width: 0.5px;
    height: 0.5px;
    transform: rotate(-45deg);
    background-image: linear-gradient(
        to right,
        #ffffff30,
        rgba(255, 255, 255, 0)
    );
}
.star-15:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 5px;
    border-radius: 50%;
    margin-top: -2px;
    background: rgba(255, 255, 255, 0.5);
    /*box-shadow: 0 0 15px 3px #fff;*/
}
</style>
