<script setup>
import CancelModal from "./CancelModal.vue";
import EditPaymentForm from "./edit_record/EditPaymentForm.vue";
import { ref } from "vue";

const props = defineProps({
    payments: {
        type: Array,
        required: true,
    },
    types: {
        type: Object,
        required: true,
    },
    fares: {
        type: Object,
        required: true,
    },
});
const options = {
    year: "numeric",
    month: "long",
    day: "numeric",
};

const selectedUserId = ref(0);
const selectedIndex = ref(0);
</script>
<template>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Status</th>
                    <th>Tipo de Pago</th>
                    <th>Monto</th>
                    <th>Fecha de Pago</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr
                    v-for="(payment, index) in props.payments.data"
                    :key="payment.id"
                >
                    <td>
                        <span>{{ payment.customer.name }}</span>
                    </td>
                    <td>
                        <span
                            v-if="payment.payment_status.name === 'Cancelado'"
                            class="badge bg-label-danger me-1"
                            >{{ payment.payment_status.name }}</span
                        >
                        <span
                            v-if="payment.payment_status.name === 'Pendiente'"
                            class="badge bg-label-warning me-1"
                            >{{ payment.payment_status.name }}</span
                        >
                        <span
                            v-if="payment.payment_status.name === 'Pagado'"
                            class="badge bg-label-success me-1"
                            >{{ payment.payment_status.name }}</span
                        >
                    </td>
                    <td style="max-width: 100px">
                        {{ payment.payment_type.name }}
                    </td>
                    <td>$ {{ payment.fare.price }}</td>
                    <td>
                        <span
                            v-if="payment.payment_status.name === 'Pagado'"
                            class="text-wrap"
                        >
                            {{
                                new Date(
                                    payment.payment_datetime,
                                ).toLocaleString("es-MX", options)
                            }}
                        </span>
                    </td>
                    <td>
                        <div
                            v-if="payment.payment_status.name === 'Pendiente'"
                            class="col-lg-3 col-sm-6 col-12"
                        >
                            <div class="">
                                <div class="btn-group">
                                    <a
                                        type="button"
                                        class="dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        <i
                                            @click="selectedUserId = payment.id"
                                            class="ti ti-dots-vertical"
                                        ></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a
                                                class="dropdown-item btn btn-success"
                                                href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#newPaymentCustomer"
                                                ><i
                                                    class="fa-solid fa-money-bill"
                                                ></i
                                                >Pagar</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                class="dropdown-item btn btn-primary"
                                                @click="selectedIndex = index"
                                                href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editPaymentCustomer"
                                                ><i
                                                    class="fa-solid fa-pen-to-square"
                                                ></i
                                                >Editar</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                class="dropdown-item btn btn-danger"
                                                href="javascript:void(0);"
                                                data-bs-toggle="modal"
                                                data-bs-target="#cancelPayment"
                                                ><i class="fa-solid fa-ban"></i
                                                >Cancelar</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <EditPaymentForm :types="props.types" :fares="props.fares" :payment="props.payments.data[selectedIndex]" />
        <CancelModal type="payments" function="cancel" :id="selectedUserId" />
    </div>
</template>
