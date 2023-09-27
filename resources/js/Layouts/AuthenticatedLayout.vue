<template>
    <div class="h-screen bg-gray-50 flex w-full gap-4">
        <Navigation />

        <main class="flex flex-col flex-1 px-4 overflow-x-hidden overflow-y-auto">
            <div class="flex items-center justify-center w-full">
                <slot />
            </div>
        </main>
    </div>
</template>

<script setup>
import Navigation from '@/components/app/Navigation.vue';
</script>
