<script setup>
import FormAuth from "../FormAuth.vue";
import { useForm } from "../hooks/useForm.js";

const { name } = useForm();

const props = defineProps({
    customers: {
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

const onSubmit = (event) => {
    event.preventDefault();
    if (validateName()) {
        const form = document.querySelector("#addPaymentCustomer");
        form.submit();
    }
};
</script>
<template>
    <div class="modal fade" id="newPayment" tabindex="-1" aria-hidden="true">
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
                        <h3 class="mb-2">Crea un nuevo pago</h3>
                        <p class="text-muted">Completa los datos.</p>
                    </div>
                    <form
                        id="addPaymentCustomer"
                        class="row g-3"
                        method="POST"
                        :action="route('payments.store')"
                    >
                        <FormAuth method="POST" />
                        <div class="col-md-12 mb-4">
                            <label class="form-label" for="payCustomerFare"
                                >Nombre del cliente</label
                            >
                            <select
                                id="select2Basic"
                                class="select2 form-select form-select-lg"
                                data-allow-clear="true"
                                name="customer_id"
                            >
                                <option selected>Seleccion un cliente</option>
                                <option
                                    v-for="customer in props.customers"
                                    :key="customer.id"
                                    :value="customer.id"
                                >
                                    {{ customer.email }}
                                </option>
                            </select>
                        </div>
                        <div class="col-6 col-md-6">
                            <label class="form-label" for="payCustomerFare"
                                >Tarifa</label
                            >
                            <select
                                id="payCustomerFare"
                                name="fare_id"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected>Selecciona una tarifa</option>
                                <option
                                    v-for="fare in fares"
                                    :key="fare.id"
                                    :value="fare.id"
                                >
                                    {{ fare.name }}, ${{ fare.price }}
                                </option>
                            </select>
                        </div>
                        <div class="col-6 col-md-6">
                            <label class="form-label" for="payCustomerFare"
                                >Tipo de pago</label
                            >
                            <select
                                id="payCustomerFare"
                                name="payment_type_id"
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected>
                                    Selecciona un tipo de pago
                                </option>
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
