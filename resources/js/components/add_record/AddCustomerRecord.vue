<script setup>
import FormAuth from "../FormAuth.vue";
import { ref, computed, inject } from "vue";
import { useForm } from '../hooks/useForm';

const bloodGroups = ref(inject('blood_groups'));
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
const blood_group = ref(bloodGroups.value[0].id);
const is_active = ref(1);

const onSubmit = (event) => {
    event.preventDefault();
    if (validateName()
        && validateEmail()
        && validatePhone()
        && validateEmergencyPhone()) {
        const form = document.querySelector('#addUserForm');
        form.submit();
    }
};
const validateNumericInput = () => {
  // Eliminar cualquier carácter que no sea un número
  phone.value = phone.value.replace(/[^0-9]/g, '');
}

const isValidPhone = computed(() => {
    if (phone.value == "" || emergency_phone.value == "") return false;
    return phone.value == emergency_phone.value;
});
const emit = defineEmits(["close", "alert"]);
</script>
<template>
    <div class="d-flex justify-content-center align-items-center">
        <div class="modal fade" id="addCustomer" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Anadir cliente</h3>
                            <p class="text-muted">
                                Añade un nuevo cliente a la base de datos
                            </p>
                        </div>
                        <form id="addUserForm" class="row g-3" @submit.prevent="onSubmit" :action="route('customers.store')"
                            method="POST">
                            <FormAuth method="POST" />
                            <div class="col-12">
                                <label class="form-label" for="bs-validation-name">Nombre</label>
                                <input type="text" v-model="name" name="name" class="form-control"
                                    placeholder="Adalberto Garcia" required />
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="modalAddUserEmail">Correo Electronico</label>
                                <input v-model="email" type="text" id="modalAddUserEmail" name="email" class="form-control"
                                    placeholder="adalberto_papu@alu.uabcs.mx" required />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalAddUserPhone">Numero de telefono</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input v-model="phone" type="tel"
                                        id="modalAddUserPhone"
                                        name="phone"
                                        class="form-control phone-number-mask"
                                        pattern="[0-9]+"
                                        maxlength="10"
                                        onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                        placeholder="612 1234 124"
                                        required
                                        />
                                    <!-- <input required v-model="phone" type="number" id="modalAddUserPhone" name="phone"
                                        class="form-control phone-number-mask" placeholder="612 1234 124" /> -->
                                </div>
                                <div v-if="isValidPhone" class="text-danger">
                                    <span>Los numeros no deben ser iguales</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalAddUserEmPhone">Numero de telefono de emergencia</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input v-model="emergency_phone" type="tel"
                                    id="modalAddUserEmPhone"
                                    name="emergency_phone"
                                    class="form-control phone-number-mask"
                                    pattern="[0-9]+"
                                    maxlength="10"
                                    onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                    placeholder="612 1234 124"
                                    required
                                    />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalAddCustomerBloodType">Tipo de sangre</label>
                                <select id="modalAddCustomerBloodType" v-model="blood_group" name="blood_group_id"
                                    class="select form-select" data-allow-clear="true">
                                    <option v-for="blood in bloodGroups" :key="blood.id" :value="blood.id">
                                        {{ blood.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="smallSelect" class="form-label">Estatus</label>
                                <select id="statusSelect" v-model="is_active" class="form-select form-select"
                                    name="is_active">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Guardar
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
