<script setup>
import AddExerciseTypeRecord from '../add_record/AddExerciseTypeRecord.vue';
import ExercisesTable from './ExercisesTable.vue';
import { provide } from 'vue';
const props = defineProps({
    exercises: {
        type: Object,
        required: true,
    }
});
provide('exercises',props.exercises);
</script>
<template>
    <AddExerciseTypeRecord/>
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>TIPOS DE EJERCICIOS</span>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addExerciseType" href="javascript:void(0);">
                <i class="ti ti-plus me-1"></i> Añadir Tipo de Ejercicio
            </a>
        </h5>
        <ExercisesTable />
    </div>
</template>
