<script setup>
import Table from "../Table.vue";

const props = defineProps({
    instructors: {
        type: Object,
        required: true,
    },
    blood_groups: {
        type: Object,
        required: true,
    }
});
//TODO Qualifications for each instructor
//TODO Fix table weight
</script>
<template>
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Instructores /</span> Lista de
        Instructores
    </h4>
    <div class="card">
        <h5
            class="card-header d-flex justify-content-between align-items-center"
        >
            <span>INSTRUCTORES</span>
            <a class="btn btn-primary" href="javascript:void(0);">
                <i class="ti ti-plus me-1"></i> Añadir Instructor Nuevo
            </a>
        </h5>
        <Table :users="props.instructors.data" :blood_groups="props.blood_groups" tipo="instructors" />
    </div>
</template>
