<script setup>
import FormAuth from "../FormAuth.vue";
const props = defineProps({
    payments: {
        type: Object,
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
</script>
<template>
    <div
        class="modal fade"
        id="newPaymentCustomer"
        tabindex="-1"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg modal-simple modal-new-customer">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">Pagar tarifa de Cliente</h3>
                        <p class="text-muted">Completa los datos.</p>
                    </div>
                    <form
                        id="paymentCustomer"
                        class="row g-3"
                        method="post"
                        :action="route('payments.pay', { id: payments.id })"
                    >
                        <FormAuth method="PATCH" />
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="payCustomerName"
                                >Nombre Completo</label
                            >
                            <input
                                type="text"
                                id="payCustomerName"
                                class="form-control"
                                v-model="payments.customer.name"
                                disabled
                            />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="payCustomerFare"
                                >Tarifa</label
                            >
                            <select
                                id="payCustomerFare"
                                name="fare_id"
                                class="select2 form-select"
                                aria-label="Default select example"
                                v-model="payments.fare_id"
                            >
                                <option
                                    v-for="fare in fares"
                                    :key="fare.id"
                                    :value="fare.id"
                                >
                                    {{ fare.name }}, ${{ fare.price }}
                                </option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="payCustomerFare"
                                >Tipo de pago</label
                            >
                            <select
                                id="payCustomerFare"
                                name="payment_type_id"
                                class="select2 form-select"
                                v-model="payments.payment_type.id"
                            >
                                <option
                                    v-for="type in types"
                                    :key="type.id"
                                    :value="type.id"
                                >
                                    {{ type.name }}
                                </option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button
                                type="submit"
                                class="btn btn-primary me-sm-3 me-1"
                            >
                                Pagar
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
</template>
