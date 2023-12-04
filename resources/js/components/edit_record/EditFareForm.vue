<script setup>
import FormAuth from '../FormAuth.vue';
const props = defineProps({
    fare: {
        type: Object,
        required: true,
    },
    fare_periods: {
        type: Object,
        required: true,
    }
});
</script>
<template>
    <div class="d-flex justify-content-center align-items-center">
        <div class="modal fade" id="editFare" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Actualizar Tarifas</h3>
                            <p class="text-muted">Actualiza una tarifa</p>
                        </div>
                        <form id="addFareForm" class="row g-3" :action="route('fares.update', { id: props.fare.id })"
                            method="POST">
                            <FormAuth method="PUT" />
                            <div class="col-12 col-md-12">
                                <label class="form-label" for="newFareName">Nombre de la Tarifa</label>
                                <input type="text" id="newFareName" name="name" v-model="fare.name"
                                    class="form-control" placeholder="Tarifa" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="newFareCost">Costo</label>
                                <input type="text" id="newFareCost" name="price" v-model="fare.price"
                                    class="form-control" placeholder="$200" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editFarePeriod">Periodo</label>
                                <select id="editFarePeriod" name="fare_period_id" class="select form-select"
                                    aria-label="Default select example" v-model="fare.fare_period_id">
                                    <option v-for=" farePeriod  in props.fare_periods" :value="farePeriod.id"
                                        :key="farePeriod.id">{{ farePeriod.name }}</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-12">
                                <label for="descripcionFare" class="form-label">Descripción:</label>
                                <textarea class="form-control" id="descripcionFare" v-model="fare.description"
                                    name="description" rows="2"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Editar
                                </button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
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
