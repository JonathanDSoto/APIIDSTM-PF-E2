<script setup></script>
<template>
    <div
        class="offcanvas offcanvas-start"
        tabindex="-1"
        style="max-width: 300px"
        id="offcanvasStart"
        aria-labelledby="offcanvasStartLabel"
    >
        <div class="d-flex m-4">
            <div>
                <span class="app-brand-logo demo">
                    <img
                        src="/assets/img/favicon/gimnasio.ico"
                        alt="gimnasio"
                        width="28"
                        height="26"
                    />
                </span>
            </div>
            <div>
                <span class="app-brand-text demo menu-text fw-bold"
                    >GymXpert</span
                >
            </div>
        </div>
        <div class="d-flex h-100 m-4">
            <ul class="menu-inner nav-pills flex-column gap-4">
                <li class="menu-item">
                    <a href="/" class="menu-link text-muted">
                        <i class="menu-icon tf-icons ti ti-id"></i>
                        <div data-i18n="Dashboard">Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a :href="route('customers')" class="menu-link text-muted">
                        <i class="menu-icon tf-icons ti ti-users"></i>
                        <div data-i18n="Clientes">Clientes</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/fares" class="menu-link text-muted">
                        <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                        <div data-i18n="Tarifas">Tarifas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a
                        :href="route('instructors')"
                        class="menu-link text-muted"
                    >
                        <i class="menu-icon tf-icons ti ti-users"></i>
                        <div data-i18n="Instructores">Instructores</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/sessions" class="menu-link text-muted">
                        <i class="menu-icon tf-icons ti ti-calendar"></i>
                        <div data-i18n="Clases">Clases</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/checker" class="menu-link text-muted">
                        <i class="menu-icon tf-icons ti ti-id"></i>
                        <div data-i18n="Checador">Checador</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/payments" class="menu-link text-muted">
                        <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                        <div data-i18n="Tarifas">Pagos</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>
