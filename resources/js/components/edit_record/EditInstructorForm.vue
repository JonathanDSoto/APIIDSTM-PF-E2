<script setup>
import FormAuth from '../FormAuth.vue';

const props = defineProps({
    user: {
        type: Object,
        required: false,
    },
    blood_groups: {
        type: Object,
        required: true,
    }
})

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
                                    name="blood_group_id" class="select2 form-select" data-allow-clear="true">
                                    <option v-for="blood in props.blood_groups" :key="blood.id" :value="blood.id">
                                        {{ blood.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditIsActive">Estado</label>
                                <select id="modalEditIsActive" name="is_active" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option selected :value="(user.is_active) ? 1 : 0">
                                        {{ (user.is_active) ? 'Activo' : 'Inactivo' }}
                                    </option>
                                    <option :value="(!user.is_active) ? 1 : 0">{{ (user.is_active) ? 'Inactivo' : 'Activo'
                                    }}
                                    </option>
                                </select>
                            </div>
                                <!-- Primary -->
                                <div class="col-12">
                                    <label for="select2Primary" class="form-label">Primary</label>
                                    <div class="select2-primary">
                                        <select id="select2Primary" class="select2 form-select" multiple>
                                            <option value="1" selected>Option1</option>
                                            <option value="2" selected>Option2</option>
                                            <option value="3">Option3</option>
                                            <option value="4">Option4</option>
                                        </select>
                                    </div>
                                <!-- <label class="form-label" for="modalEditUserLanguage">Language</label>
                                <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select"
                                    multiple>
                                    <option value="">Select</option>
                                    <option value="english" selected>English</option>
                                    <option value="spanish">Spanish</option>
                                    <option value="french">French</option>
                                    <option value="german">German</option>
                                    <option value="dutch">Dutch</option>
                                    <option value="hebrew">Hebrew</option>
                                    <option value="sanskrit">Sanskrit</option>
                                    <option value="hindi">Hindi</option>
                                </select> -->
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
