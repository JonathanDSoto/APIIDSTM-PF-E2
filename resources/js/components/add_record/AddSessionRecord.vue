<script setup>
import { ref, provide, watchEffect } from 'vue';
import { useForm } from '../hooks/useForm';
import SessionDay from '../sessions/SessionDay.vue';
const props = defineProps({
    instructors: {
        type: Object,
        required: true,
    },
    week_days: {
        type: Object,
        required: true,
    },
    exercise_types: {
        type: Object,
        required: true,
    },
});
provide('instructors', props.instructors);
provide('week_days', props.week_days);
const { name, description, max_capacity, validateName, validateMaxCapacity } = useForm();
const exerciseType = ref();
exerciseType.value = props.exercise_types[0].id;
const time = ref({
    start_hour: 0,
    end_hour: 24,
});
const sessionDays = ref([{
    instructor_id: props.instructors[0].id,
    week_day_id: props.week_days[0].id,
    start_hour: time.value.start_hour,
    end_hour: time.value.end_hour,
}]);
const sessionDayInput = ref();
const addSessionDay = () => {
    sessionDays.value.push({
        instructor_id: props.instructors[0].id,
        week_day_id: props.week_days[0].id,
        start_hour: time.value.start_hour,
        end_hour: time.value.end_hour,
    });
};
watchEffect(()=>{
    sessionDayInput.value = JSON.stringify(sessionDays.value);
    console.log(sessionDays);
})

const onSubmit = (event) => {
    event.preventDefault();
    let isValid = true;
    if (!validateName()) { isValid = false; }
    if (!validateMaxCapacity()) { isValid = false; }
    if (isValid) {
        const form = document.querySelector('#addSessionForm');
        form.submit();
    }
};
</script>
<template>
    <div class="container">
        <h4 class="col-12">
            <span class="text-muted fw-light">Clases / Clases Disponibles / </span> Añadir
        </h4>
        <div class="card">
            <div class="card-header text-center">
                <h5>Añadir una Clase</h5>
            </div>
            <div class="card-body">
                <form method="POST" @submit.prevent="onSubmit" id="addSessionForm" :action="route('sessions.store')">
                    <FormAuth method="POST" />
                    <div class="form-group mt-2">
                        <label for="nombreClase">Nombre de la Clase:</label>
                        <input type="text" v-model="name" name="name" class="form-control" id="nombreClase"
                            placeholder="Ingrese el nombre de la clase">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="exercises">Tipo de Ejercicio:</label>
                                <select class="select2 form-control" v-model="exerciseType" name="exercise_type_id" id="exercises">
                                    <option v-for="exercise in exercise_types" :value="exercise.id" :key="exercise.id">
                                        {{ exercise.name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="capacidadMaxima">Capacidad Máxima:</label>
                                <input type="number" v-model="max_capacity" name="max_capacity" class="form-control mt-1"
                                    id="capacidadMaxima" placeholder="Ingrese la capacidad máxima">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" minlength="10" v-model="description" id="descripcion"
                            name="description" rows="1" placeholder="Ingrese una descripción"></textarea>
                    </div>
                    <hr class="mt-4">
                    <h5 class="text-center">Horarios</h5>
                    <SessionDay v-for="(sessionDay, index) in sessionDays" :init_values="sessionDay"
                        :sessionDays="sessionDays" :index="index" />
                    <input type="hidden" name="session_days" v-model="sessionDayInput" />
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <button type="button" @click="addSessionDay()"
                                class="btn btn-primary ti ti-plus mt-2 bi-lg"></button>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar</button>
                        <a :href="route('sessions')" class="btn btn-label-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
