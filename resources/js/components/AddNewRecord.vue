<script setup>
import FormAuth from "./FormAuth.vue";

const props = defineProps({
    what: {
        type: String,
    },
});

const recordData = {
    name: "",
    email: "",
    phone: "",
    emergency_phone: "",
    blood_type_id: "",
};

const emit = defineEmits(["close", "alert"]);
console.log(props.what);
</script>
<template>
    <template v-if="props.what == 'fares'">
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
                                <label
                                    class="form-label"
                                    for="editInstructorBlood"
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
                                ></textarea
                                >
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
    <template v-if="props.what == 'customers'">
        <div class="modal fade" id="addUser" tabindex="-1" aria-hidden="true">
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
                            <h3 class="mb-2">Anadir Usuario</h3>
                            <p class="text-muted">
                                Anade un nuevo usuario a la base de datos
                            </p>
                        </div>
                        <form
                            id="addUserForm"
                            class="row g-3"
                            :action="route('customers.store')"
                            method="POST"
                        >
                            <FormAuth method="POST" />
                            <div class="col-12">
                                <label
                                    class="form-label"
                                    for="bs-validation-name"
                                    >Nombre</label
                                >
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="Adalberto Garcia"
                                    required
                                />
                            </div>
                            <div class="col-12 col-md-6">
                                <label
                                    class="form-label"
                                    for="modalAddUserEmail"
                                    >Correo Electronico</label
                                >
                                <input
                                    type="text"
                                    id="modalAddUserEmail"
                                    name="email"
                                    class="form-control"
                                    placeholder="adalberto_papu@alu.uabcs.mx"
                                    required
                                />
                            </div>
                            <div class="col-12 col-md-6">
                                <label
                                    class="form-label"
                                    for="modalAddUserPhone"
                                    >Numero de telefono</label
                                >
                                <div class="input-group">
                                    <span class="input-group-text"
                                        >MX (+52)</span
                                    >
                                    <input
                                        required
                                        v-model="recordData.phone"
                                        type="text"
                                        id="modalAddUserPhone"
                                        name="phone"
                                        class="form-control phone-number-mask"
                                        placeholder="612 1234 124"
                                    />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label
                                    class="form-label"
                                    for="modalAddUserEmPhone"
                                    >Numero de telefono de emergencia</label
                                >
                                <div class="input-group">
                                    <span class="input-group-text"
                                        >MX (+52)</span
                                    >
                                    <input
                                        required
                                        v-model="recordData.emergency_phone"
                                        type="text"
                                        id="modalAddUserEmPhone"
                                        name="emergency_phone"
                                        class="form-control phone-number-mask"
                                        placeholder="612 1234 124"
                                    />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label
                                    class="form-label"
                                    for="modalAddUserCountry"
                                    >Tipo de sangre</label
                                >
                                <select
                                    required
                                    id="modalAddUserCountry"
                                    name="blood_group_id"
                                    class="select2 form-select"
                                    data-allow-clear="true"
                                >
                                    <option value="">
                                        Selecciona tipo de sangre
                                    </option>
                                    <option value="1">O-</option>
                                    <option value="2">O+</option>
                                    <option value="3">A-</option>
                                    <option value="4">A+</option>
                                    <option value="5">B-</option>
                                    <option value="6">B+</option>
                                    <option value="7">AB-</option>
                                    <option value="8">AB+</option>
                                </select>
                            </div>
                            <div class="col-12 text-center">
                                <button
                                    type="submit"
                                    class="btn btn-primary me-sm-3 me-1"
                                >
                                    Guardar
                                </button>
                                <button
                                    type="reset"
                                    class="btn btn-label-secondary"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                >
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </template>
</template>
