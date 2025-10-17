<template>
    <div class="z-[1] separator-stripe" />
</template>

<script setup lang="ts"></script>

<style>
.separator-stripe {
    position: relative;
    display: flex;
    height: 2rem;
    width: 100%;
    border-left: 1px solid var(--edge);
    border-right: 1px solid var(--edge);
}

.separator-stripe::before {
    content: "";
    position: absolute;
    left: -100vw;
    z-index: -1;
    height: 2rem;
    width: 200vw;
    background-image: repeating-linear-gradient(
        315deg,
        rgba(228, 228, 231, 0.56) 0,
        rgba(228, 228, 231, 0.56) 1px,
        transparent 0,
        transparent 50%
    );
    background-size: 10px 10px;
    border-top: 1px solid var(--edge);
    border-bottom: 1px solid var(--edge);
}

.dark .separator-stripe::before {
    background-image: repeating-linear-gradient(
        315deg,
        rgba(39, 39, 42, 0.56) 0,
        rgba(39, 39, 42, 0.56) 1px,
        transparent 0,
        transparent 50%
    );
}
</style>
