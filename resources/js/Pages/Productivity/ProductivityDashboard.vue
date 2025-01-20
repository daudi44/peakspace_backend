<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import TimeRegister from './Components/TimeRegister.vue';
</script>

<template>
    <AppLayout title="Productivity">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class="py-8 px-32">
            <TimeRegister />
        </div>
    </AppLayout>
</template>

<style>
</style>