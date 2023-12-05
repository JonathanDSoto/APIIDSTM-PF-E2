<script setup>
import AddCustomerRecord from "../add_record/AddCustomerRecord.vue";
import Pagination from "../Pagination.vue";
import Table from "../Table.vue";
import { provide } from 'vue';

const props = defineProps({
    customers: {
        type: Object,
        required: true,
    },
    success: {
        type: Boolean,
    },
    message: {
        type: String,
    },
    blood_groups: {
        type: Object,
        required: true,
    },
});
provide('blood_groups',props.blood_groups);
</script>

<template>
    <AddCustomerRecord />
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Clientes /</span> Lista de clientes
    </h4>
    <div class="card">
        <h5
            class="card-header d-flex justify-content-between align-items-center"
        >
            <span>CLIENTES</span>
            <button
                class="btn btn-primary"
                href="javascript:void(0);"
                data-bs-toggle="modal"
                data-bs-target="#addCustomer"
            >
                <i class="ti ti-plus me-1"></i> Añadir Cliente nuevo
            </button>
        </h5>
        <Table
            :users="props.customers.data"
            tipo="customers"
        />
    </div>
    <Pagination :users="props.customers" ruta="customers" />
</template>
