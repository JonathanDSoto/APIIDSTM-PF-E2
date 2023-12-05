<script setup>
import FormAuth from "./FormAuth.vue";
import Aside from "./Aside.vue";

const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <Aside />
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <i data-bs-toggle="offcanvas" data-bs-target="#offcanvasStart" aria-controls="offcanvasStart"
                class="ti ti-menu-2 ti-sm"></i>
        </div>
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
                <div class="nav-item mb-0">
                    <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                        <span class="d-none d-md-inline-block text-muted">BIENVENIDO - {{ user.name }}</span>
                    </a>
                </div>
            </div>
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img :src="`https://ui-avatars.com/api/?name=${user.name}`" alt class="h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="/profile">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img :src="`https://ui-avatars.com/api/?name=${user.name}`" alt
                                                class="h-auto rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-medium d-block">{{
                                            user.name
                                        }}</span>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <form id="logout-form" :action="route('logout')" method="POST">
                                <FormAuth method="POST" />
                                <button class="dropdown-item">
                                    <i class="ti ti-logout me-2 ti-sm"></i>
                                    <span class="align-middle">Cerrar Sesion</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </nav>
</template>
