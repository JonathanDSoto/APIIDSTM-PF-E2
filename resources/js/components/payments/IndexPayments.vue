<script setup>
import TablePayments from "../TablePayments.vue";
import Pagination from "../Pagination.vue";
import AddPaymentRecord from "../add_record/AddPaymentRecord.vue";
import PayPayment from "./PayPayment.vue";
const props = defineProps({
    payments: {
        type: Object,
        required: true,
    },
    fares: {
        type: Object,
        required: true,
    },
    types: {
        type: Array,
        required: true,
    },
});
console.log(props.types);
</script>
<template>
    <div class="card">
        <h5
            class="card-header d-flex justify-content-between align-items-center"
        >
            <span>PAGOS</span>
            <a
                href="javascript:void(0);"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#newPayment"
            >
                <i class="ti ti-cash me-1"></i> Realizar pago
            </a>
        </h5>
        <TablePayments :types="props.types" :fares="props.fares" :payments="props.payments" />
        <!-- New Payment modal-->
        <!--
        <div
            class="modal fade"
            id="deletePaymentCustomer"
            tabindex="-1"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-lg modal-simple modal-delete-payment"
            >
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Eliminar Pago</h3>
                        </div>
                        <form
                            id="deletePaymentForm"
                            class="row g-3"
                            onsubmit="return false"
                        >
                            <div class="col-12 text-center">
                                <h4
                                    class="text-center"
                                    for="modalDeletePayment"
                                >
                                    ¿Desea eliminar el pago seleccionado?
                                </h4>
                            </div>
                            <div class="col-12 text-center">
                                <button
                                    type="submit"
                                    class="btn btn-primary me-sm-3 me-1"
                                >
                                    Eliminar
                                </button>
                                <button
                                    type="reset"
                                    class="btn btn-label-secondary"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                >
                                    Cancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
    <PayPayment />
    <AddPaymentRecord />
    <Pagination :users="props.payments" ruta="payments" />
</template>
