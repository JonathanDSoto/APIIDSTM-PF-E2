<script setup>
import { inject } from 'vue';

defineProps({
    method: {
        required: true,
        type: String
    }
})

const csrf = inject('csrf');
</script>

<template>
    <input type="hidden" name="_token" :value="csrf" autocomplete="off">
    <input type="hidden" name="_method" :value="method">
</template>
