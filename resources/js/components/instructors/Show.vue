<script setup>
import { provide } from 'vue';
import InstructorShelduleCard from './InstructorShelduleCard.vue';
const props = defineProps({
    instructor: {
        type: Object,
        required: true,
    },
    blood_groups: {
        type: Object,
        required: true,
    },
    exercise_types: {
        type: Object,
        required: true,
    }
});
provide('instructor', props.instructor);
provide('exercise_types',props.exercise_types);
provide('blood_groups',props.blood_groups);
</script>
<template>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                        <img :src="`https://ui-avatars.com/api/?name=${props.instructor.name}&background=5FBDFF`" alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ instructor.name }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item d-flex gap-1">
                                        <span class="badge bg-label-success me-1">
                                            <i class="fas fa-dumbbell"></i> Entrenamiento Funcional
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-md-2">
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editInstructor" href="javascript:void(0);">
                                    <i class="ti ti-pencil me-1"></i> Editar informacion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INFORMACION -->
    <div class="row">
        <InstructorInfo/>
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="row">
                <!-- ASISTENCIA -->
                <InstructorShelduleCard/>
            </div>
        </div>
    </div>
    <EditInstructorForm :user="props.instructor" />
</template>
