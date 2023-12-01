<script setup>
import FormAuth from "./FormAuth.vue";

const props = defineProps({
    what: {
        type: String,
    },
});

const recordData = {
    name: "",
    email: "",
    phone: "",
    emergency_phone: "",
    blood_type_id: "",
};

const emit = defineEmits(["close", "alert"]);
</script>
<template></template>
