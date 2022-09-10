<template>
    <div class="hidden lg:grid lg:grid-cols-2">
        <slot name="left" />
        <slot name="right" />
    </div>
    <div class="block lg:hidden">
        <!-- <div class="max-h-64 overflow-hidden">
            <slot name="right" />
        </div> -->
        <slot name="left" />
    </div>
</template>
