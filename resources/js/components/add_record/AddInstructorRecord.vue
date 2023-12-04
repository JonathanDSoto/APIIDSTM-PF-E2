<script setup>
import { ref } from 'vue';
import FormAuth from '../FormAuth.vue';
import SelectInput from '../SelectInput.vue';

const props = defineProps({
    blood_groups: {
        type: Object,
        required: true,
    },
    exercise_types: {
        type: Object,
        required: true,
    }
});

const dataForm = ref({
    name: "",
    email: "",
    phone: "",
    emergency_phone: "",
    blood_group_id: 1,
    is_active: 1,
    exercise_types: []
});

</script>
<template>
    <div class="d-flex justify-content-center align-items-center">
        <div class="modal fade" id="addInstructor" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Agregar un instructor</h3>
                            <p class="text-muted">
                                Agregar un instructor en la base de datos<br>
                            </p>
                        </div>
                        <form id="addInstructorForm" class="row g-3" :action="route('instructors.store')
                            " method="POST">
                            <FormAuth method="POST" />
                            <div class="col-12">
                                <label class="form-label" for="modalAddInstructorName">Nombre completo</label>
                                <input v-model="dataForm.name" type="text" id="modalAddInstructorName" name="name"
                                    class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="modalAddInstructorEmail">Correo electronico</label>
                                <input v-model="dataForm.email" type="text" id="modalAddInstructorEmail" name="email"
                                    class="form-control" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalAddInstructorPhone">Numero de telefono</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input v-model="dataForm.phone" type="text" id="modalAddInstructorPhone" name="phone"
                                        class="form-control phone-number-mask" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalAddInstructorEmPhone">Numero de telefono de
                                    emergencia</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input v-model="dataForm.emergency_phone" type="text" id="modalAddInstructorEmPhone"
                                        name="emergency_phone" class="form-control phone-number-mask" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalAddInstructorBloodType">Tipo de sangre</label>
                                <select v-model="dataForm.blood_group_id" id="modalAddInstructorBloodType"
                                    name="blood_group_id" class="form-select form-select" data-allow-clear="true">
                                    <option v-for="blood in props.blood_groups" :key="blood.id" :value="blood.id">
                                        {{ blood.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="statusSelect" class="form-label">Estatus</label>
                                <select id="statusSelect" class="form-select form-select" name="is_active">
                                    <option value="1" selected>Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                            <!-- Primary -->
                            <div class="col-12">
                                <SelectInput
                                    title="Especialidad(es)"
                                    input-name="instructor_qualifications"
                                    name="AddInstructorQualifications"
                                    :options="exercise_types"
                                />
                            </div>
                            <!-- <div class="col-12">
                                <label for="select2Primary" class="form-label">Especialidad(es)</label>
                                <div class="select2-primary">
                                    <select id="select2Primary" class="select2 form-select" multiple>
                                        <option v-for="exercise in props.exercise_types" :value="exercise.name"> {{ exercise.name }}</option>
                                    </select>
                                </div>
                                <input type="hidden" name="instructor_qualifications" :value="'{{json_encode('+dataForm.exercise_types+')}}'">
                            </div> -->
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
