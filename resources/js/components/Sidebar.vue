<script setup>
import { ref } from 'vue';
const toggle = ref(false);
</script>
<template>
    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a :href="route('home')" class="menu-link">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div data-i18n="Clientes">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a :href="route('customers')" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Clientes">Clientes</div>
            </a>
        </li>
        <li class="menu-item">
            <a :href="route('fares')" class="menu-link">
                <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                <div data-i18n="Tarifas">Tarifas</div>
            </a>
        </li>
        <li class="menu-item">
            <a :href="route('instructors')" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Instructores">Instructores</div>
            </a>
        </li>
        <li class="menu-item">
            <a :href="route('sessions')" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div data-i18n="Clases">Clases</div>
            </a>
        </li>
        <li class="menu-item">
            <a :href="route('exercise_types')" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="menu-icon tf-icons bi bi-bicycle" viewBox="0 0 16 16">
                    <path
                        d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5m1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139zM8 9.057 9.598 6.5H6.402zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z" />
                </svg>
                <div data-i18n="Ejercicios">Ejercicios</div>
            </a>
        </li>
        <li class="menu-item">
            <a :href="route('time_check')" class="menu-link">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div data-i18n="Checador">Checador</div>
            </a>
        </li>
        <li :class="`menu-item ${(toggle) ? 'active open' : ''}`">
            <a href="javascript:void(0);" @click="toggle = !toggle" class="menu-link menu-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="menu-icon tf-icons bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                    <path
                        d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                    <path
                        d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg>
                <!-- <i class="menu-icon tf-icons ti ti-file-dollar"></i> -->
                <div data-i18n="Tarifas">Pagos</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a :href="route('payments')" class="menu-link">
                        <div data-i18n="All Customers">Lista de pagos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a :href="route('payment_types')" class="menu-link">
                        <div data-i18n="Customer Details">Tipos de pagos</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</template>
