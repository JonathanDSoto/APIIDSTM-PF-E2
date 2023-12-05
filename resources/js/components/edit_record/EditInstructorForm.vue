<script setup>
import { ref, inject, watchEffect } from 'vue';
import FormAuth from '../FormAuth.vue';
import SelectInput from '../SelectInput.vue';

const props = defineProps({
    user: {
        type: Object,
        required: false,
    },
})
const bloodGroups = ref(inject('blood_groups'));
const exerciseTypes = ref(inject('exercise_types'));
const instructor_especialities = ref([]);
watchEffect(() => {
    instructor_especialities.value = props.user.exercise_types.map(exercise => exercise.id);
});
</script>
<template>
    <div class="d-flex justify-content-center align-items-center">
        <div class="modal fade" id="editInstructor" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Editar a un instructor</h3>
                            <p class="text-muted">
                                Editar un instructor en la base de datos<br>
                            </p>
                        </div>
                        <form id="editInstructorForm" class="row g-3" :action="route('instructors.update', { id: props.user.id })
                            " method="POST">
                            <FormAuth method="PUT" />
                            <div class="col-12">
                                <label class="form-label" for="modalEditInstructorName">Nombre completo</label>
                                <input v-model="props.user.name" type="text" id="modalEditInstructorName" name="name"
                                    class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="modalEditInstructorEmail">Correo electronico</label>
                                <input v-model="props.user.email" type="text" id="modalEditInstructorEmail" name="email"
                                    class="form-control" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditInstructorPhone">Numero de telefono</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input v-model="props.user.phone" type="text" id="modalEditInstructorPhone" name="phone"
                                        class="form-control phone-number-mask" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditInstructorEmPhone">Numero de telefono de
                                    emergencia</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input v-model="props.user.emergency_phone" type="text" id="modalEditInstructorEmPhone"
                                        name="emergency_phone" class="form-control phone-number-mask" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditInstructorBloodType">Tipo de sangre</label>
                                <select v-model="props.user.blood_group_id" id="modalEditInstructorBloodType"
                                    name="blood_group_id" class="select form-select" data-allow-clear="true">
                                    <option v-for="blood in bloodGroups" :key="blood.id" :value="blood.id">
                                        {{ blood.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditIsActive">Estatus</label>
                                <select id="modalEditIsActive" name="is_active" class="select form-select"
                                    data-allow-clear="true">
                                    <option selected :value="(user.is_active) ? 1 : 0">
                                        {{ (user.is_active) ? 'Activo' : 'Inactivo' }}
                                    </option>
                                    <option :value="(!user.is_active) ? 1 : 0">{{ (user.is_active) ? 'Inactivo' : 'Activo'
                                    }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-12">
                                <SelectInput title="Especialidad(es)" name="editInstructorQualifications"
                                    input-name="instructor_qualifications" :options="exerciseTypes"
                                    :selected="instructor_especialities" />
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
