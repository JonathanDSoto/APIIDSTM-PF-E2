<script setup>
const props = defineProps({
    customer: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <div class="card mb-4" style="max-height: 550px; overflow: hidden">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-action-title mb-0">Informacion</h5>
                <div class="card-action-element">
                    <div>
                        <span>
                            <i class="ti ti-message-dots ti-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-4 mt-3">
                    <li class="d-flex align-items-center mb-3">
                        <i class="ti ti-user text-heading"></i>
                        <span class="fw-medium mx-2 text-heading"
                            >Nombre Completo:</span
                        >
                        <span>{{ props.customer.name }}</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="ti ti-check text-heading"></i>
                        <span class="fw-medium mx-2 text-heading">Status:</span>
                        <span>{{
                            props.customer.status === "1" ||
                            props.customer.status === 1
                                ? "Activo"
                                : "Inactivo"
                        }}</span>
                    </li>
                </ul>
                <small class="card-text text-uppercase">Contacto</small>
                <ul class="list-unstyled mb-4 mt-3">
                    <li class="d-flex align-items-center mb-3">
                        <i class="ti ti-phone-call"></i>
                        <span class="fw-medium mx-2 text-heading"
                            >Contacto:</span
                        >
                        <span>{{ props.customer.phone }}</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="ti ti-mail"></i>
                        <span class="fw-medium mx-2 text-heading">Email:</span>
                        <span class="text-break">{{
                            props.customer.email
                        }}</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="ti ti-phone-call"></i>
                        <span class="fw-medium mx-2 text-heading"
                            >Emergencia:</span
                        >
                        <span>{{ props.customer.emergency_phone }}</span>
                    </li>
                </ul>
                <small class="card-text text-uppercase">Salud</small>
                <ul class="list-unstyled mb-4 mt-3">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-tint"></i>
                        <span class="fw-medium mx-2 text-heading"
                            >Tipo de Sangre:</span
                        >
                        <span>{{ props.customer.blood_group.name }}</span>
                    </li>
                </ul>
                <small class="card-text text-uppercase"
                    >Informacion secreta</small
                >
                <ul class="list-unstyled mb-5 mt-3">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span class="fw-medium mx-2 text-heading">Codigo:</span>
                        <span>
                            {{ props.customer.code }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
