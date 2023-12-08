<script setup>
import { provide } from 'vue';
import InformationCard from "./InformationCard.vue";
import SheduleCard from './SheduleCard.vue';
const props = defineProps({
    session: {
        type: Object,
        required: true,
    }
});
provide('session', props.session);
</script>
<template>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                        <img src="/assets/img/favicon/ejercicio.png" alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ props.session.name }}</h4>
                                <p>{{ props.session.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INFORMACION -->
    <div class="row">
        <InformationCard />
        <!-- ASISTENCIAS -->
        <SheduleCard />
    </div>
    <!--/ ASISTENCIAS -->
    <!-- EDITAR CLASE -->
    <div class="modal fade" id="editSession" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <h3 class="mb-2">Edita la clase</h3>
                        <p>Edita los datos permitidos</p>
                    </div>
                    <form id="EditCustomerSession" class="row g-3" onsubmit="return false">
                        <div class="col-12 col-md-12">
                            <label for="selectCustomer" class="form-label">Ingresa el nombre de la clase</label>
                            <input type="text" id="modalEditSession" name="modalEditSession" class="form-control"
                                placeholder="Entrenamiento Funcional" />
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="horaInicial" class="form-label">Hora Inicial:</label>
                                    <input type="time" class="form-control" id="horaInicial" name="horaInicialSession">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="horaFinal" class="form-label">Hora Final:</label>
                                    <input type="time" class="form-control" id="horaFinal" name="horaFinalSession">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalSessionInstructor">Entrenador/Instructor</label>
                            <input type="text" id="modalSessionInstructor" name="modalSessionInstructor"
                                class="form-control" placeholder="Mark Martin" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="selectDay" class="form-label">Selecciona el dia</label>
                            <select id="selectDay" class="form-select form-select-lg share-project-select"
                                data-allow-clear="true">
                                <option value="dia" select>Dia de la semana</option>
                                <option value="lunes">Lunes</option>
                                <option value="martes">Martes</option>
                                <option value="miercoles">Miercoles </option>
                                <option value="jueves">Jueves</option>
                                <option value="viernes">Viernes </option>
                                <option value="sabado">Sabado </option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="capacity" class="form-label">Capacidad Maxima de personas:</label>
                            <input type="number" class="form-control" id="numero" name="numero">
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Editar</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
