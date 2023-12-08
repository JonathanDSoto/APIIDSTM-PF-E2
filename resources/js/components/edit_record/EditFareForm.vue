<script setup>
import { ref, inject, watchEffect } from 'vue';
import FormAuth from '../FormAuth.vue';
import { useForm } from '../hooks/useForm.js'
const props = defineProps({
    fare: {
        type: Object,
        required: true,
    },
});
const farePeroids = ref(inject('fare_periods'));
const { name, price, description, fare_period_id, validateName, validatePrice } = useForm();
watchEffect(()=>{
    name.value = props.fare.name;
    price.value = props.fare.price;
    description.value = props.fare.description;
    fare_period_id.value = props.fare.fare_period_id;
})
const onSubmit = (event) => {
    event.preventDefault();
    if (validateName() && validatePrice()) {
        const form = document.querySelector('#addFareForm');
        form.submit();
    }
};
</script>
<template>
    <div class="d-flex justify-content-center align-items-center">
        <div class="modal fade" id="editFare" tabindex="-1" aria-hidden="true">
            <div
                class="modal-dialog modal-dialog-centered modal-lg modal-simple modal-edit-user"
            >
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Actualizar Tarifas</h3>
                            <p class="text-muted">Actualiza una tarifa</p>
                        </div>
                        <form id="addFareForm" class="row g-3" @submit.prevent="onSubmit" :action="route('fares.update', { id: fare_period_id })"
                            method="POST">
                            <FormAuth method="PUT" />
                            <div class="col-12 col-md-12">
                                <label class="form-label" for="newFareName">Nombre de la Tarifa</label>
                                <input type="text" id="newFareName" name="name" v-model="name"
                                    class="form-control" placeholder="Tarifa" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="newFareCost">Costo</label>
                                <input type="text" id="newFareCost" name="price" v-model="price"
                                    class="form-control" placeholder="$200" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editFarePeriod">Periodo</label>
                                <select id="editFarePeriod" name="fare_period_id" class="select form-select"
                                    aria-label="Default select example" v-model="fare_period_id">
                                    <option v-for=" farePeriod  in farePeroids" :value="farePeriod.id"
                                        :key="farePeriod.id">{{ farePeriod.name }}</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-12">
                                <label for="descripcionFare" class="form-label">Descripción:</label>
                                <textarea class="form-control" id="descripcionFare" v-model="description"
                                    name="description" rows="2"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button
                                    type="submit"
                                    class="btn btn-primary me-sm-3 me-1"
                                >
                                    Editar
                                </button>
                                <button
                                    type="reset"
                                    class="btn btn-label-secondary"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                >
                                    Cancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
