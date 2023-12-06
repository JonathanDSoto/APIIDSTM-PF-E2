<script setup>
import { ref, inject } from 'vue';
import DeleteModal from "../DeleteModal.vue";
import EditExerciseTypeRecord from "../edit_record/EditExerciseTypeRecord.vue";
const exercises = ref(inject('exercises'));
exercises.value = exercises.value.data;
const selectedId = ref(exercises.value[0].id);
const selectedIndex = ref(0);
console.log(exercises.value[selectedIndex.value]);
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
                <tr v-for="(exercise, index) in exercises">
                    <td>{{ exercise.name }}</td>
                    <td class="text-end">
                        <button
                            class="btn btn-success me-1"
                            href="javascript:void(0);"
                            @click="selectedIndex = index"
                            data-bs-toggle="modal"
                            style="margin: 5px"
                            data-bs-target="#editExerciseType">
                            <i class="ti ti-pencil "></i>
                        </button>
                        <button class="btn btn-danger" href="javascript:void(0);" @click="selectedId = exercise.id"
                            style="margin: 5px" data-bs-toggle="modal" data-bs-target="#deleteUser">
                            <i class="ti ti-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <EditExerciseTypeRecord
        :exercise="exercises[selectedIndex]"
    />
    <DeleteModal function="delete" type="exercise_types" :id="selectedId" />
</template>
