<script setup>
const props = defineProps({
    tipo: {
        type: Object,
    },
});
</script>
<template>
    <div
        class="modal fade"
        id="addPaymentType"
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
                        <h3 class="mb-2">Anadir Nuevo Pago de Cliente</h3>
                        <p class="text-muted">Completa los datos.</p>
                    </div>
                    <form
                        method="post"
                        id="paymentCustomer"
                        class="row g-3"
                        :action="route('payment_types.store')"
                    >
                        <FormAuth method="POST" />
                        <div class="col-12">
                            <label
                                class="form-label"
                                for="modalEditCustomerName"
                                >Nombre del tipo de pago</label
                            >
                            <input
                                type="text"
                                id="modalEditCustomerName"
                                name="name"
                                class="form-control"
                            />
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
