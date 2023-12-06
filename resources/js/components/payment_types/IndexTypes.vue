<script setup>
import TableTypes from "./TableTypes.vue";
const props = defineProps({
    types: {
        type: Object,
    },
});
</script>
<template>
    <div class="card">
        <h5
            class="card-header d-flex justify-content-between align-items-center"
        >
            <span>TIPOS DE PAGOS</span>
            <a
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#newCustomer"
                href="javascript:void(0);"
            >
                <i class="ti ti-plus me-1"></i> Añadir Tipo de Pago
            </a>
        </h5>
        <TableTypes :types="props.types" />
    </div>
</template>
