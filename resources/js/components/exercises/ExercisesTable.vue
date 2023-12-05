<script setup>
import DeleteModal from "../DeleteModal.vue";
import { ref, inject } from 'vue';
const exercises = ref(inject('exercises'));
exercises.value = exercises.value.data;
console.log(JSON.stringify(exercises.value));
console.log(exercises.value[0].id);
const selectedId = ref(exercises.value[0].id);
</script>
<template>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre de tipo de ejercicio</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr v-for="exercise in exercises">
                    <td>{{ exercise.name }}</td>
                    <td class="text-end">
                        <a class="btn btn-success me-1" href="javascript:void(0);">
                            <i class="ti ti-pencil "></i>
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);" @click="selectedId = exercise.id"
                            style="margin: 5px" data-bs-toggle="modal" data-bs-target="#deleteUser">
                            <i class="ti ti-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <DeleteModal function="delete" type="exercise_types" :id="selectedId" />
</template>
