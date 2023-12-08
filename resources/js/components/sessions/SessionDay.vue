<script setup>
import { ref, inject } from 'vue';
import {useAlerts} from '../hooks/useAlerts';
const props = defineProps({
    init_values:{
        type: Object,
        required: true,
    },
    sessionDays:{
        type: Object,
        required: true,
    },
    index:{
        type:Number,
        required:true,
    }
});
const {showError} = useAlerts();
const instructors = ref(inject('instructors'));
const week_days = ref(inject('week_days'));
const deleteSessionDay = () => {
    if(props.sessionDays.length > 1){
        props.sessionDays.splice(props.index, 1);
    }else{
        showError('Debe haber minimo un instructor.');
    }
};
</script>
<template>
    <div class="row mt-3">
        <div class="col-md-5">
            <div class="form-group">
                <label  :for="'instructor'+index">Seleccionar un Instructor:</label>
                <select class="select2 form-control" v-model="init_values.instructor_id" :id="'instructor'+index">
                    <option v-for="instructor in instructors" :value="instructor.id" :key="instructor.id">
                        {{ instructor.name }}</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label :for="'dia'+index">Seleccionar un Día:</label>
                <select class="select2 form-control" v-model="init_values.week_day_id" :id="'dia'+index">
                    <option v-for="day in week_days" :value="day.id">{{ day.name }}</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label :for="'horaInicio'+index">Hora de Inicio:</label>
                <input type="number" v-model="init_values.start_hour" :id="'horaInicio'+index" min="0" :max="init_values.end_hour-1" class="form-control">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label :for="'horaFinal'+index">Hora Final:</label>
                <input type="number" v-model="init_values.end_hour" :id="'horaFinal'+index" :min="init_values.start_hour+1" max="23" class="form-control">
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group mt-4">
                <button type="button" class="btn btn-danger ti ti-trash" @click="deleteSessionDay()"></button>
            </div>
        </div>
    </div>
</template>
