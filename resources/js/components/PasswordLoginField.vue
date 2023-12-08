<script setup>
import { ref } from 'vue';

const showPassword = ref(true);
const type = ref('password');

const changeVisibility = () => {
    showPassword.value = !showPassword.value;
    type.value = showPassword.value ? 'password' : 'text';
};

</script>

<template>
    <div class="input-group input-group-merge">
        <input :type="type" id="password" class="form-control" name="password"
            placeholder="ingresa tu contraseña" aria-describedby="password" />
        <span class="input-group-text">
            <i @click="changeVisibility" id="togglePass" class="ti ti-lock"></i>
        </span>
    </div>
</template>