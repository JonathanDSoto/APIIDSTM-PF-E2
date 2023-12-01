<script setup>
import FormAuth from "../FormAuth.vue";
</script>
<template>
    <div class="modal fade" id="addFare" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">Anadir Tarifas</h3>
                        <p class="text-muted">Anadie una nueva tarifa</p>
                    </div>
                    <form
                        id="addFareForm"
                        class="row g-3"
                        :action="route('fares.store')"
                        method="POST"
                    >
                        <FormAuth method="POST" />
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="newFareName"
                                >Nombre de la Tarifa</label
                            >
                            <input
                                type="text"
                                id="newFareName"
                                name="name"
                                class="form-control"
                                placeholder="Tarifa"
                            />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="newFareCost"
                                >Costo</label
                            >
                            <input
                                type="text"
                                id="newFareCost"
                                name="price"
                                class="form-control"
                                placeholder="$200"
                            />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="editInstructorBlood"
                                >Periodo</label
                            >
                            <select
                                id="editInstructorBlood"
                                name="fare_period_id"
                                class="select2 form-select"
                                aria-label="Default select example"
                            >
                                <option value="1">Diario</option>
                                <option value="2">Semanal</option>
                                <option value="3">Mensual</option>
                                <option value="4">Anual</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="descripcionFare" class="form-label"
                                >Descripción:</label
                            >
                            <textarea
                                class="form-control"
                                id="descripcionFare"
                                name="description"
                                rows="2"
                            ></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button
                                type="submit"
                                class="btn btn-primary me-sm-3 me-1"
                            >
                                Añadir
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
</template>
