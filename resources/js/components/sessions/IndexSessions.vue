<script setup>
import { provide } from 'vue';
const props = defineProps({
    sessions: {
        type: Object,
        required: true,
    }
});
console.log(props.sessions);
provide('sessions', props.sessions.data);
console.log(props.sessions.data);
const selectedIndex = 0;
</script>
<template>
    <div class="row mb-3">
        <h4 class="col-9 py-3">
            <span class="text-muted fw-light">Clases /</span> Clases Disponibles
        </h4>
        <div class="col-3 text-end">
            <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#newSession"
                href="javascript:void(0);">
                <i class="ti ti-plus me-1"></i> Añadir Clase
            </a>
        </div>
        <SessionCard v-for="(session, index) in sessions.data" :session="session" />

        <!-- MODAL RESERVAR EN UNA CLASE -->
        <div class="modal fade" id="reserveSession" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center">
                            <h3 class="mb-2">Reservar un espacio en la clase</h3>
                            <p>Ingresa los datos solicitados para reservar una clase</p>
                        </div>
                        <form id="reserveCustomerSession" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-12">
                                <label for="selectCustomer" class="form-label">Selecciona el cliente</label>
                                <select id="selectCustomer" class="form-select form-select-lg share-project-select"
                                    data-allow-clear="true">
                                    <option select>Selecciona un cliente</option>
                                    <option data-name="Albert Cook" data-image="">Albert Cook</option>
                                    <option data-name="Barry Hunter" data-image="">Barry Hunter</option>
                                    <option data-name="Trevor Baker" data-image="">Trevor Baker</option>
                                    <option data-name="Emma Jhonson" data-image="">Emma Jhonson</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-12">
                                <label for="selectCustomer" class="form-label">Entrenador/Instructor</label>
                                <select id="selectCustomer" class="form-select form-select-lg share-project-select"
                                    data-allow-clear="true">
                                    <option select>Selecciona un entrenador</option>
                                    <option data-name="markMartin" data-image="">Mark Martin</option>
                                    <option data-name="paulThompson" data-image="">Paul Thompson</option>
                                    <option data-name="georgeGarcia" data-image="">George Garcia</option>
                                    <option data-name="stevenRobinson" data-image="">Steven Robinson</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="selectCustomer" class="form-label">Selecciona el dia</label>
                                <select id="selectCustomer" class="form-select form-select-lg share-project-select"
                                    data-allow-clear="true">
                                    <option value="dia" select>Dias</option>
                                    <option value="lunes">Lunes</option>
                                    <option value="martes">Martes</option>
                                    <option value="miercoles">Miercoles </option>
                                    <option value="jueves">Jueves</option>
                                    <option value="viernes">Viernes </option>
                                    <option value="sabado">Sabado </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="selectCustomer" class="form-label">Selecciona el horario</label>
                                <select id="selectCustomer" class="form-select form-select-lg share-project-select"
                                    data-allow-clear="true">
                                    <option value="horario" select>Horario</option>
                                    <option value="horario1">10am - 11am </option>
                                    <option value="horario2">11am - 12pm </option>
                                    <option value="horario3">1pm- 2pm </option>
                                    <option value="horario4">3pm - 4pm </option>
                                    <option value="horario5">6pm - 7pm </option>
                                    <option value="horario6">7pm - 8pm </option>
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
        <!--/ MODAL RESERVAR EN UNA CLASE -->

        <!-- ELIMINAR CLASE -->
        <div class="modal fade" id="deleteSession" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center">
                            <h3 class="mb-2">Eliminar clase</h3>
                        </div>
                        <form id="reserveCustomerSession" class="row g-3" onsubmit="return false">
                            <div class="col-12 text-center">
                                <h4 class="text-center" for="modalDeleteSession">¿Desea eliminar la clase seleccionada?</h4>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Eliminar</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <!--/ ELIMINAR CLASE -->
</div></template>
