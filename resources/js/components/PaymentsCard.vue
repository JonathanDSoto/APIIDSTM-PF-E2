<script setup>
const props = defineProps({
    payments: {
        type: Object,
        required: true,
    },
});
const therePayments = props.payments.length == 0 ? true : false;
</script>
<template>
    <div class="col-lg-12 col-xl-6">
        <div
            v-if="therePayments"
            class="alert alert-danger alert-dismissible"
            role="alert"
        >
            No hay pagos
        </div>
        <div
            class="card card-action mb-4"
            style="max-height: 500px; overflow: auto"
        >
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Pagos</h5>
                <div class="card-action-element">
                    <div>
                        <!--  <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#paymentCustomer" type="button"> -->
                        <i class="ti ti-currency-dollar ti-sm"></i>
                        <!-- </button> -->
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body pb-0">
                    <ul class="timeline ms-1 mb-0">
                        <li
                            v-for="payment in props.payments"
                            class="timeline-item timeline-item-transparent"
                        >
                            <span
                                v-if="payment.payment_status.name == 'Pagado'"
                                class="timeline-point timeline-point-success"
                            ></span>
                            <span
                                v-else-if="
                                    payment.payment_status.name == 'Cancelado'
                                "
                                class="timeline-point timeline-point-danger"
                            ></span>
                            <span
                                v-else
                                class="timeline-point timeline-point-warning"
                            ></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">
                                        Estado:
                                        {{ payment.payment_status.name }}
                                    </h6>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <small class="text-muted"
                                        >Pago: {{ payment.fare.name }}</small
                                    >
                                </div>
                            </div>
                        </li>
                        <!-- <li class="text-center">
                            <a href="javascript:;">Ver Mas</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
