<script setup>
import { provide } from "vue";
import Table from "../Table.vue";
import AddInstructorRecord from "../add_record/AddInstructorRecord.vue";

const props = defineProps({
    instructors: {
        type: Object,
        required: true,
    },
    blood_groups: {
        type: Object,
        required: true,
    },
    exercise_types: {
        type: Object,
        required: true,
    }
});
provide('exercise_types',props.exercise_types);
provide('blood_groups',props.blood_groups);
</script>
<template>
    <AddInstructorRecord />
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Instructores /</span> Lista de
        Instructores
    </h4>
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>INSTRUCTORES</span>
            <button class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addInstructor">
                <i class="ti ti-plus me-1"></i> Añadir Instructor Nuevo
            </button>
        </h5>
        <Table :users="props.instructors.data" tipo="instructors" />
    </div>
</template>
