<script setup>
import { ref, inject } from 'vue';
const instructor = ref(inject('instructor'));
console.log(instructor.value);
</script>
<template>
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-action-title mb-0">Informacion</h5>
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
                            <i class="ti ti-user text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Nombre Completo:</span>
                            <span>{{ instructor.name }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-check text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Status:</span>
                            <span>{{ instructor.is_active }}</span>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-dumbbell text-heading"></i>
                                <span class="fw-medium mx-2 text-heading">Especialidad/Clase:</span>
                            </div>
                            <ul class=" mt-1 mx-4 w-100">
                                <span v-if="instructor.exercise_types.length != 0">
                                    <li v-for="exercise in instructor.exercise_types">
                                        {{ exercise.name }}
                                    </li>
                                </span>
                                <span v-else>El instructor no tiene especialidad</span>
                            </ul>
                        </li>
                    </ul>
                    <small class="card-text text-uppercase">Contacto</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-phone-call text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Contacto:</span>
                            <span>{{ instructor.phone }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-mail text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Email:</span>
                            <span>{{ instructor.email }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-phone-call text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Emergencia:</span>
                            <span>{{ instructor.emergency_phone }}</span>
                        </li>
                    </ul>
                    <small class="card-text text-uppercase">Salud</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-tint text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Tipo de Sangre:</span>
                            <span>{{instructor.blood_group.name}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
