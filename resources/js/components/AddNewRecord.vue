<script setup>
const emit = defineEmits(["close"]);
</script>
<template>
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
                        onsubmit="return false"
                    >
                        <div class="col-12">
                            <label class="form-label" for="modalEditUserName"
                                >Nombre</label
                            >
                            <input
                                type="text"
                                id="modalAddUserName"
                                name="modalAddUserName"
                                class="form-control"
                                placeholder="Adalberto Garcia"
                            />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalAddUserEmail"
                                >Correo Electronico</label
                            >
                            <input
                                type="text"
                                id="modalAddUserEmail"
                                name="modalAddUserEmail"
                                class="form-control"
                                placeholder="adalberto_papu@alu.uabcs.mx"
                            />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserPhone"
                                >Numero de telefono</label
                            >
                            <div class="input-group">
                                <span class="input-group-text">MX (+52)</span>
                                <input
                                    type="text"
                                    id="modalEditUserPhone"
                                    name="modalEditUserPhone"
                                    class="form-control phone-number-mask"
                                    placeholder="612 1234 124"
                                />
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserPhone"
                                >Numero de telefono de emergencia</label
                            >
                            <div class="input-group">
                                <span class="input-group-text">MX (+52)</span>
                                <input
                                    type="text"
                                    id="modalEditUserPhone"
                                    name="modalEditUserPhone"
                                    class="form-control phone-number-mask"
                                    placeholder="612 1234 124"
                                />
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserCountry"
                                >Tipo de sangre</label
                            >
                            <select
                                id="modalEditUserCountry"
                                name="modalEditUserCountry"
                                class="select2 form-select"
                                data-allow-clear="true"
                            >
                                <option value="">Selecciona tipo de sangre</option>
                                <option value="Australia">O-</option>
                                <option value="Bangladesh">O+</option>
                                <option value="Belarus">A-</option>
                                <option value="Brazil">A+</option>
                                <option value="Canada">B-</option>
                                <option value="China">B+</option>
                                <option value="France">AB-</option>
                                <option value="Germany">AB+</option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button
                                type="submit"
                                class="btn btn-primary me-sm-3 me-1"
                            >
                                Submit
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
