<script setup>
import { useForm } from '../hooks/useForm';
const  {name, showError,validateName} = useForm();
const onSubmit = (event) => {
    event.preventDefault();
    if (validateName()) {
        const form = document.querySelector('#addExerciseTypeForm');
        form.submit();
    } else {
        showError();
    }
};
</script>
<template>
    <div class="d-flex justify-content-center align-items-center">
        <div class="modal fade" id="addExerciseType" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Agregar un tipo de ejercicio</h3>
                            <p class="text-muted">
                                Agregar un tipo de ejercicio en la base de datos<br>
                            </p>
                        </div>
                        <form id="addExerciseTypeForm" class="row g-3" @submit.prevent="onSubmit" :action="route('exercise_types.store')
                            " method="POST">
                            <FormAuth method="POST" />
                            <div class="col-12">
                                <label class="form-label" for="modalAddExerciseName">Nombre del tipo de ejercicio</label>
                                <input v-model="name" type="text" id="modalAddExerciseName" name="name"
                                    class="form-control" />
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Guardar
                                </button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
