<script setup>
 const props = defineProps({
     instructors: {
         type: Object,
         required: true,
     }
 })
console.log(props.instructors);
 //TODO Qualifications for each instructor
 //TODO Fix table weight
</script>
<template>
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Instructores /</span> Lista de
        Instructores
    </h4>
    <div class="card">
        <h5
            class="card-header d-flex justify-content-between align-items-center"
        >
            <span>INSTRUCTORES</span>
            <a class="btn btn-primary" href="javascript:void(0);">
                <i class="ti ti-plus me-1"></i> Añadir Instructor Nuevo
            </a>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Especialidad</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr v-for="instructor in props.instructors.data" :key="instructor.id">
                        <td>
                            <ul
                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"
                            >
                                <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Albert Cook"
                                >
                                    <img
                                        src="/assets/img/avatars/7.png"
                                        alt="Avatar"
                                        class="rounded-circle"
                                    />
                                    <a :href="route('instructors.show', { id: instructor.id })">{{instructor.name}}</a>
                                </li>
                            </ul>
                        </td>
                        <td>{{instructor.phone}}</td>
                        <td>Entrenamiento Funcional</td>
                        <td>
                            <span class="badge bg-label-success me-1"
                                >Activo</span
                            >
                        </td>
                        <td class="text-end">
                            <a
                                class="btn btn-success"
                                href="javascript:void(0);"
                            >
                                <i class="ti ti-pencil me-1"></i> Editar
                            </a>
                            <a
                                class="btn btn-danger"
                                href="javascript:void(0);"
                            >
                                <i class="ti ti-trash me-1"></i> Borrar
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
