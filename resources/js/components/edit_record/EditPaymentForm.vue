<template>
    <div
        class="modal fade"
        id="editPaymentCustomer"
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
                        <h3 class="mb-2">Editar Pago de Cliente</h3>
                        <p class="text-muted">Completa los datos.</p>
                    </div>
                    <form
                        id="paymentCustomer"
                        class="row g-3"
                        onsubmit="return false"
                    >
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="payCustomerName"
                                >Nombre Completo</label
                            >
                            <input
                                type="text"
                                id="payCustomerName"
                                name="payCustomerName"
                                class="form-control"
                                placeholder="Albert Cook"
                            />
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label" for="payCustomerFare"
                                >Tarifa</label
                            >
                            <select
                                id="payCustomerFare"
                                name="payCustomerFare"
                                class="select2 form-select"
                                aria-label="Default select example"
                            >
                                <option selected>Tarifa</option>
                                <option value="diario" selected>
                                    Diaria $50.00
                                </option>
                                <option value="mensual">Mensual $450.00</option>
                                <option value="anual">Anual $3000.00</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="payCustomerFareDays"
                                >Cantidad de Dias, Meses, Años</label
                            >
                            <input
                                type="text"
                                id="payCustomerFareDays"
                                name="payCustomerFareDays"
                                class="form-control"
                                placeholder="4"
                            />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="payCustomerAmount"
                                >Monto a pagar</label
                            >
                            <input
                                type="text"
                                id="payCustomerAmount"
                                name="payCustomerAmount"
                                class="form-control"
                                placeholder="$200"
                            />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="payCustomerFare"
                                >Tipo de pago</label
                            >
                            <select
                                id="payCustomerFare"
                                name="payCustomerFare"
                                class="select2 form-select"
                                aria-label="Default select example"
                            >
                                <option value="efectivo" selected>
                                    Efectivo
                                </option>
                                <option value="tarjeta">Tarjeta</option>
                                <option value="tranferencia">
                                    Transferencia
                                </option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="dobBasic" class="form-label"
                                >Fecha de Pago</label
                            >
                            <input
                                type="date"
                                id="dobBasic"
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
