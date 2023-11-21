<script setup></script>
<template>
    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div data-i18n="Clientes">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-calendar.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Clientes">Clientes</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link">
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
            <a href="app-calendar.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div data-i18n="Clases">Clases</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-calendar.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div data-i18n="Checador">Checador</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                <div data-i18n="Tarifas">Pagos</div>
            </a>
        </li>
    </ul>
</template>
