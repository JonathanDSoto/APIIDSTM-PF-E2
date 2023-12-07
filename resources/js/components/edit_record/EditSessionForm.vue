<script setup>
import { useForm } from '../hooks/useForm';

const props = defineProps({
    session: {
        type: Object,
        required: true,
    },
});
const { name, validateEmail } = useForm();
console.log(props.session);
</script>
<template>
    <div class="container">
        <h4 class="col-12">
            <span class="text-muted fw-light">Clases / Clases Disponibles / </span> Editar
        </h4>
        <div class="card">
            <div class="card-header text-center">
                <h5>Editar una Clase</h5>
            </div>
            <div class="card-body">
                <form @submit.prevent="true" :href="route('sessions.update', { id: props.session.id })">
                    <div class="form-group mt-2">
                        <label for="nombreClase">Nombre de la Clase:</label>
                        <input type="text" class="form-control" id="nombreClase"
                            placeholder="Ingrese el nombre de la clase">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="tipoEjercicio">Tipo de Ejercicio:</label>
                                <input type="text" class="form-control mt-1 text-muted"
                                    :value="props.session.exercise_type.name" readonly />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="capacidadMaxima">Capacidad Máxima:</label>
                                <input type="number" class="form-control mt-1" id="capacidadMaxima" min="5" max="50"
                                    placeholder="Ingrese la capacidad máxima">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" rows="1"
                            placeholder="Ingrese una descripción"></textarea>
                    </div>
                    <hr class="my-4">
                    <h5 class="text-center">Horarios</h5>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="instructor">Seleccionar un Instructor:</label>
                                <select class="form-control" id="instructor">
                                    <option value="instructor1">Aaron Meza</option>
                                    <option value="instructor2">Dario Garcia</option>
                                    <option value="instructor3">Jose Cervantes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="dia">Seleccionar un Día:</label>
                                <select class="form-control" id="dia">
                                    <option value="lunes">Lunes</option>
                                    <option value="martes">Martes</option>
                                    <option value="miercoles">Miércoles</option>
                                    <option value="jueves">Jueves</option>
                                    <option value="viernes">Viernes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="horaInicio">Hora de Inicio:</label>
                                <input type="text" class="form-control" id="horaInicio">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="horaFinal">Hora Final:</label>
                                <input type="text" class="form-control" id="horaFinal">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-danger ti ti-trash"></button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary ti ti-plus mt-2 bi-lg"></button>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                            aria-label="Close">Cancelar</button>
                    </div>
                </form>
            </div>
    </div>
</div></template>
