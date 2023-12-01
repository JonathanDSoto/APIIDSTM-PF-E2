<script setup>
import Pagination from "./Pagination.vue";
const props = defineProps({
    payments: {
        type: Object,
        required: true,
    },
});
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
                        <a href="/payment">
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
                                        src="/assets/img/avatars/5.png"
                                        alt="Avatar"
                                        class="rounded-circle"
                                    />Alb
                                </li>
                            </ul>
                        </a>
                    </td>
                    <td>
                        <span class="badge bg-label-success me-1">Pagado</span>
                    </td>
                    <td>Trasferencia</td>
                    <td>$50.00</td>
                    <td>24/12/2023</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
