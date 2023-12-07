<script setup>
import { ref, inject } from 'vue';
const sessionInfo = ref(inject('session'));
const sessionDays = ref(sessionInfo.value);
sessionDays.value = sessionDays.value.session_days;
console.log(sessionInfo.value);
</script>
<template>
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card mb-4" style="height:95%; min-height: 300px;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-action-title mb-0">Información</h5>
                    <div class="card-action-element">
                        <div>
                            <span>
                                <i class="ti ti-message-dots ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-check text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Nombre de la Clase:</span>
                            <span>{{ sessionInfo.name }}</span>
                        </li>
                        <li class="align-items-center mb-3">
                            <i class="fas fa-users text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Entrenadores:</span>
                            <ul class=" mt-1 mx-4 w-100">
                                <span v-for="day in sessionDays">
                                    <li>
                                        {{ day.instructor.name }}
                                    </li>
                                </span>
                            </ul>
                        </li>
                        <li class="align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-comment text-heading"></i>
                                <span class="fw-medium mx-2 text-heading">Descripción:</span>
                            </div>
                            <li>
                                <p class="text-start mt-1">{{ sessionInfo.description }}</p>
                            </li>
                        </li>
                    </ul>
                    <small class="card-text text-uppercase">Capacidad</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-user-lock text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Capacidad Máxima:</span>
                            <span>{{ sessionInfo.max_capacity }}</span>
                        </li>
                        <!-- <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-user-lock text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Espacios Reservados:</span>
                            <span>{{}}</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-user-plus text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Espacios Disponibles:</span>
                            <span>{{}}</span>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
