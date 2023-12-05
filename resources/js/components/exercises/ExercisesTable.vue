<script setup>
import { ref, inject } from 'vue';
const exercises = ref(inject('exercises'));
exercises.value = exercises.value.data;
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
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
