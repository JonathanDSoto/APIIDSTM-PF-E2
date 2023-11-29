<script setup>
import AddNewRecord from "../AddNewRecord.vue";
import Pagination from "../Pagination.vue";
import Table from "../Table.vue";
import { reactive, ref } from "vue";

const clientes = false;

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

const toggle = ref(false);

</script>

<template>
    <AddNewRecord />
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Clientes /</span> Lista de clientes
    </h4>
    <div class="card">
        <h5
            class="card-header d-flex justify-content-between align-items-center"
        >
            <span>CLIENTES</span>
            <button
                @click="toggle = !toggle"
                class="btn btn-primary"
                href="javascript:void(0);"
                data-bs-toggle="modal"
                data-bs-target="#addUser"
            >
                <i class="ti ti-plus me-1"></i> Añadir Cliente nuevo
            </button>
        </h5>
        <Table
            :users="props.customers.data"
            :blood_groups="props.blood_groups"
            :tipo="false"
        />
    </div>
    <Pagination :users="props.customers" />
</template>
