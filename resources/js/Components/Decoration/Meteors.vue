<template>
    <div class="z-0">
        <div class="meteor-1 blur-xs"></div> <!-- used to be xs -->
        <div class="meteor-2 blur-xs"></div>
        <div class="meteor-3 blur-xs"></div> <!-- used to be xs -->
        <div class="meteor-4 blur-md"></div>
        <div class="meteor-5 blur-xs"></div> <!-- used to be xs -->
        <div class="meteor-6 blur-lg"></div>
        <div class="meteor-7 blur-xs"></div> <!-- used to be xs -->
                <div class="meteor-8 blur-xs"></div>
                <div class="meteor-9 blur-xs"></div> <!-- used to be xs -->
                <div class="meteor-10 blur-md"></div>
                <div class="meteor-11 blur-xs"></div> <!-- used to be xs -->
                <div class="meteor-12 blur-lg"></div>
                <div class="meteor-13 blur-xs"></div> <!-- used to be xs -->
                <div class="meteor-14 blur-xs"></div>
                <div class="meteor-15 blur-xs"></div> <!-- used to be xs -->
    </div>
</template>

<script>
    export default {
        name: 'Meteors',
    };
</script>

<style scoped lang="css">
    html,
    body {
        height: 100%;
        overflow: hidden;
        background-color: #000;
    }
    .meteor-1 {
        position: absolute;
        top: 111px;
        left: 12%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 9.4s linear infinite;
    }
    .meteor-1:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-2 {
        position: absolute;
        top: 278px;
        left: 32%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 8.1s linear infinite;
    }
    .meteor-2:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-3 {
        position: absolute;
        top: 271px;
        left: 82%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 4s linear infinite;
    }
    .meteor-3:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-4 {
        position: absolute;
        top: 61px;
        left: 38%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 5s linear infinite;
    }
    .meteor-4:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-5 {
        position: absolute;
        top: 132px;
        left: 36%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 8.2s linear infinite;
    }
    .meteor-5:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-6 {
        position: absolute;
        top: 220px;
        left: 80%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 7.5s linear infinite;
    }
    .meteor-6:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-7 {
        position: absolute;
        top: 213px;
        left: 29%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 5.1s linear infinite;
    }
    .meteor-7:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-8 {
        position: absolute;
        top: 58px;
        left: 56%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 5.8s linear infinite;
    }
    .meteor-8:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-9 {
        position: absolute;
        top: 290px;
        left: 67%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 3.7s linear infinite;
    }
    .meteor-9:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-10 {
        position: absolute;
        top: 96px;
        left: 46%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 9.6s linear infinite;
    }
    .meteor-10:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-11 {
        position: absolute;
        top: 203px;
        left: 37%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 4.1s linear infinite;
    }
    .meteor-11:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-12 {
        position: absolute;
        top: 150px;
        left: 98%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 4.1s linear infinite;
    }
    .meteor-12:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-13 {
        position: absolute;
        top: 151px;
        left: 83%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 4.6s linear infinite;
    }
    .meteor-13:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-14 {
        position: absolute;
        top: 284px;
        left: 36%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 5.1s linear infinite;
    }
    .meteor-14:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    .meteor-15 {
        position: absolute;
        top: 149px;
        left: 49%;
        width: 300px;
        height: 1px;
        transform: rotate(-45deg);
        background-image: linear-gradient(
            to right,
            #ffffff30,
            rgba(255, 255, 255, 0)
        );
        animation: meteor 9.8s linear infinite;
    }
    .meteor-15:before {
        content: '';
        position: absolute;
        width: 4px;
        height: 5px;
        border-radius: 50%;
        margin-top: -2px;
        background: rgba(255, 255, 255, 0.5);
        /*box-shadow: 0 0 15px 3px #fff;*/
    }
    @keyframes meteor {
        0% {
            opacity: 1;
            margin-top: -300px;
            margin-right: -300px;
        }
        12% {
            opacity: 0;
        }
        15% {
            margin-top: 300px;
            margin-left: -600px;
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
</style>
