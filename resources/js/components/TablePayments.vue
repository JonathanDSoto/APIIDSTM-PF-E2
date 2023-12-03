<script setup>
import Pagination from "./Pagination.vue";
import CancelModal from "./CancelModal.vue";
import { ref } from "vue";
const props = defineProps({
    payments: {
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
                <tr v-for="payment in props.payments.data" :key="payment.id">
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
                                new Date(payment.created_at).toLocaleString(
                                    "es-MX",
                                    options
                                )
                            }}
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-success">E</button>
                        <button
                            @click="selectedUserId = payment.id"
                            class="btn btn-danger"
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#cancelPayment"
                        >
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <CancelModal type="payments" function="cancel" :id="selectedUserId" />
    </div>
</template>
