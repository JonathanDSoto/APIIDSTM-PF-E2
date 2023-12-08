<script setup>
import { ref, inject, watchEffect } from 'vue';
import FormAuth from '../FormAuth.vue';
const props = defineProps({
    name: {
        type: String,
        required: true,
    },
    id: {
        type: Number,
        required: true,
    }
});
const customers = ref(inject('customers'));
const id = ref(props.id);
const name = ref(props.name);
watchEffect(() => {
    id.value = props.id;
    name.value = props.name;
    if (name.value.trim() === '') {
        name.value = props.name;
    }
});
</script>
<template>
    <div class="modal fade" id="addCustomerRegister" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <h3 class="mb-2">Reservar un espacio en la clase</h3>
                        <p>({{name}})</p>
                    </div>
                    <form method="POST" id="reserveCustomerSession" class="row g-3" :action="route('sessions.subscribe')">
                        <FormAuth method="POST" />
                        <div class="col-12 col-md-12">
                            <input type="hidden" v-model="id" name="session_day_id" class="form-control" readonly />
                            <label for="selectCustomer" class="form-label">Selecciona al cliente</label>
                            <select id="selectCustomer" name="customer_id" class="select2 form-select form-select-lg">
                                <option v-for="customer, index in customers" :value="customer.id" :key="index">
                                    {{ customer.name }}</option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Reservar</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
