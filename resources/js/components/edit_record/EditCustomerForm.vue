<script setup>
import FormAuth from '../FormAuth.vue';
import { ref, inject } from 'vue';
import { useForm } from '../hooks/useForm';

const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
})
const {
    name,
    email,
    phone,
    emergency_phone,
    validateName,
    validateEmail,
    validatePhone,
    validateEmergencyPhone,
} = useForm();
const bloodGroups = ref(inject('blood_groups'));

name.value = props.user.name;
email.value = props.user.email;
phone.value = props.user.phone;
emergency_phone.value = props.user.emergency_phone;
const onSubmit = (event) => {
    event.preventDefault();
    if (validateName()
        && validateEmail()
        && validatePhone()
        && validateEmergencyPhone()) {
        const form = document.querySelector('#editCustomerForm');
        form.submit();
    }
};

</script>
<template>
    <div class="d-flex justify-content-center align-items-center">
        <div class="modal fade" id="editCustomer" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Editar Cliente</h3>
                            <p class="text-muted">
                                Editar un cliente en la base de datos<br>
                            </p>
                        </div>
                        <form id="editCustomerForm" class="row g-3" @submit.prevent="onSubmit" :action="route('customers.update', { id: props.user.id })
                            " method="POST">
                            <FormAuth method="PUT" />
                            <div class="col-12">
                                <label class="form-label" for="modalEditCustomerName">Nombre completo</label>
                                <input v-model="name" type="text" id="modalEditCustomerName" name="name"
                                    class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="modalEditCustomerEmail">Correo electronico</label>
                                <input v-model="email" type="text" id="modalEditCustomerEmail" name="email"
                                    class="form-control" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditCustomerPhone">Numero de telefono</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input v-model="phone" type="tel"
                                        id="modalEditCustomerPhone"
                                        name="phone"
                                        class="form-control phone-number-mask"
                                        pattern="[0-9]+"
                                        maxlength="10"
                                        onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditCustomerEmPhone">Numero de telefono de
                                    emergencia</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input v-model="emergency_phone" type="tel"
                                        id="modalEditCustomerEmPhone"
                                        name="emergency_phone"
                                        class="form-control phone-number-mask"
                                        pattern="[0-9]+"
                                        maxlength="10"
                                        onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditCustomerBloodType">Tipo de sangre</label>
                                <select v-model="props.user.blood_group_id" id="modalEditCustomerBloodType"
                                    name="blood_group_id" class="select2 form-select" data-allow-clear="true">
                                    <option v-for="blood in bloodGroups" :key="blood.id" :value="blood.id">
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
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal"
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
