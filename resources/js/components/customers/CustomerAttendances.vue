<script setup>
const props = defineProps({
    customer: {
        type: Object,
        required: true,
    },
    attendances: {
        type: Object,
        required: true
    }
});
console.log(props.customer);
</script>
<template>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                        <a :href="route('customers.show', { id: props.customer.id })">
                            <img :src="`https://ui-avatars.com/api/?name=${props.customer.name}&background=A6CF98`" alt="user image"
                                class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                        </a>
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <!-- style="text-decoration: underline;" -->
                                <a :href="route('customers.show', { id: props.customer.id })"><h4>{{ props.customer.name }}</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- INFORMACION -->
        <div class="col-lg-12 col-xl-12">
            <div class="card card-action mb-4">
                <div class="card-header align-items-center">
                    <h5 class="card-action-title mb-0">Historial de Asistencias</h5>
                    <div class="card-action-element">
                        <div>
                            <i class="ti ti-calendar ti-sm"></i>
                        </div>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre de la clase</th>
                                <th>Dia de la clase</th>
                                <th>Horario de la clase</th>
                                <th>Asistencia</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr v-for=" attendance in props.attendances.data">
                                <td>{{attendance.session.name}}</td>
                                <td>{{attendance.week_day.name}}</td>
                                <td>{{ attendance.start_hour }} hrs - {{ attendance.end_hour }} hrs </td>
                                <td >
                                    <span v-if="attendance.pivot.attended === 1" class="badge bg-label-success me-1">Asistio</span>
                                    <span v-else class="badge bg-label-danger me-1">No Asistio</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <Pagination :users="props.attendances" :ruta="'customers.show_attendances'" :params='{ id: customer.id }' />
</template>
