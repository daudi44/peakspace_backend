<script setup>
import { ref } from 'vue';
import {clock} from 'vue-clock-lonlyape-v3'
</script>

<template>
    <div class="card">
        <clock  :width="300" :height="300" />
        <div>
            <h3 style="font-weight: bold;">Time register</h3>
        </div>
    </div>
</template>

<style scoped>
.card {
    background-color: white;
    border-radius: 0.5rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    padding: 30px;
    width: 40%;
    gap: 20px;
}
</style>