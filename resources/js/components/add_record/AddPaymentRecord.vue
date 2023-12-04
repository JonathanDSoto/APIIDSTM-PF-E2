<script setup></script>
<template>
    <h1>Payment Modal</h1>
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
                        <h3 class="mb-2">Pagar tarifa de Cliente</h3>
                        <p class="text-muted">Completa los datos.</p>
                    </div>
                    <form
                        id="paymentCustomer"
                        class="row g-3"
                        onsubmit="return false"
                    >
                        <div class="col-md-6 mb-4">
                            <select
                                id="select2Basic"
                                class="select2 form-select form-select-lg"
                                data-allow-clear="true"
                            >
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="payCustomerFare"
                                >Tarifa</label
                            >
                            <input
                                type="text"
                                id="payCustomerFare"
                                name="payCustomerFare"
                                class="form-control"
                                placeholder="Diario $50"
                            />
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
                        <div class="col-12 col-md-4">
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
                        <div class="col-12 col-md-1 d-flex align-items-end">
                            <a
                                class="btn btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#newPeriod"
                                href="javascript:void(0);"
                            >
                                <i class="ti ti-plus me-1"></i>
                            </a>
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
