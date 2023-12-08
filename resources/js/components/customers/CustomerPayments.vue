<script setup>
import { ref } from 'vue';
const props = defineProps({
    customer: {
        type: Object,
        required: true,
    },
    payments: {
        type: Object,
        required: true
    }
});
const paymentsDate = ref([]);
paymentsDate.value = props.payments.data.map(payment => {
    const date = new Date(payment.payment_datetime);
    const options = { day: 'numeric', month: 'long', year: 'numeric' };
    return `${date.toLocaleDateString('es-MX', options)}`;
});

</script>
<template>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                        <img :src="`https://ui-avatars.com/api/?name=${props.customer.name}&background=A6CF98`"
                            alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ props.customer.name }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-12">
            <div class="card card-action mb-4">
                <div class="card-header align-items-center">
                    <h5 class="card-action-title mb-0">Historial de Pagos</h5>
                    <div class="card-action-element">
                        <div>
                            <i class="ti ti-currency-dollar ti-sm"></i>
                            <!-- <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#paymentCustomer" type="button">
                                <i class="ti ti-currency-dollar ti-sm"></i>
                            </button> -->
                        </div>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Tarifa</th>
                                <th>Status</th>
                                <th>Tipo de Pago</th>
                                <th>Monto</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr v-for="(payment, index) in payments.data">
                                <td style="width: 30%;">
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" :title="props.customer.name">
                                            <i class="ti ti-calendar me-1"></i> {{ paymentsDate[index] }}
                                        </li>
                                    </ul>
                                </td>
                                <td style="width: 15%;">{{ payment.fare.name }}</td>
                                <td style="width: 15%;">
                                    <span class="badge bg-label-success me-1">Pagado</span>
                                </td>
                                <td style="width: 20%;">{{ payment.payment_type.name }}</td>
                                <td style="width: 20%;">${{ payment.fare.price }} MXN</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <Pagination :users="payments" :ruta="'customers.show_payments'" :params='{ id: customer.id }' />
</template>
