<script setup>
import { ref, inject } from 'vue';
import FormAuth from "../FormAuth.vue";
import { useForm } from '../hooks/useForm.js'

const { name, price, description, fare_period_id, validateName, validatePrice } = useForm();
const farePeroids = ref(inject('fare_periods'));
fare_period_id.value = farePeroids.value[0].id;
const onSubmit = (event) => {
    event.preventDefault();
    if (validateName() && validatePrice()) {
        const form = document.querySelector('#addFareForm');
        form.submit();
    }
};
</script>
<template>
    <div class="modal fade" id="addFare" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">Anadir Tarifas</h3>
                        <p class="text-muted">Anadie una nueva tarifa</p>
                    </div>
                    <!-- :action="route('fares.store')" -->
                    <form id="addFareForm" method="POST" @submit.prevent="onSubmit" :action="route('fares.store')"
                        class="row g-3">
                        <FormAuth method="POST" />
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="newFareName">Nombre de la Tarifa</label>
                            <input type="text" v-model="name" id="newFareName" name="name" class="form-control"
                                placeholder="Tarifa" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="newFareCost">Costo</label>
                            <input type="text" v-model="price" id="newFareCost" name="price" class="form-control"
                                placeholder="200" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="newFarePeriod">Periodo</label>
                            <select id="newFarePeriod" name="fare_period_id" class="select form-select"
                                aria-label="Default select example" v-model="fare_period_id">
                                <option v-for=" farePeriod  in farePeroids" :value="farePeriod.id" :key="farePeriod.id">{{
                                    farePeriod.name }}</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="descripcionFare" class="form-label">Descripción:</label>
                            <textarea class="form-control" v-model="description" id="descripcionFare"
                                name="description" rows="2"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                Añadir
                            </button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
