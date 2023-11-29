<script setup>
import CustomerInfo from "../CustomerInfo.vue";
const props = defineProps({
     customer: {
         type: Object,
         required: true,
     }
 });
 console.log(props.customer);
</script>
<template>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                        <img src="/assets/img/avatars/5.png" alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ props.customer.name }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item d-flex gap-1">
                                        <span class="badge bg-label-warning me-1">
                                            <i class='ti ti-currency-dollar'></i> Pago Pendiente </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-md-2">
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCustomer"
                                    href="javascript:void(0);">
                                    <i class="ti ti-pencil me-1"></i> Editar informacion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-5">
                <CustomerInfo :customer="props.customer" />
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7">
                <div class="row">
                    <!-- ASISTENCIA -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">Asistencias</h5>
                                <div class="card-action-element">
                                    <div>
                                        <span>
                                            <i class="ti ti-calendar ti-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-body pb-0">
                                    <ul class="timeline ms-1 mb-0">
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-primary"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Lunes</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Horario: 10am-11am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-success"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Martes</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Horario: 10am-11am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-danger"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Miercoles</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Horario: 10am-11am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent ">
                                            <span class="timeline-point timeline-point-info"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Jueves</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Horario: 10am-11am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent border-transparent">
                                            <span class="timeline-point timeline-point-warning"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Viernes</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Horario: 10am-11am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="text-center">
                                            <a href="javascript:;">Ver Mas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ ASISTENCIA -->
                    <!-- PAGOS -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">Pagos</h5>
                                <div class="card-action-element">
                                    <div>
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#paymentCustomer" type="button">
                                            <i class="ti ti-currency-dollar ti-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-body pb-0">
                                    <ul class="timeline ms-1 mb-0">
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-primary"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Noviembre</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Pago: Mensual</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-success"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Octubre</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Pago: Mensual</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-danger"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Septiembre</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Pago: Mensual</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent ">
                                            <span class="timeline-point timeline-point-info"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Agosto</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Pago: Mensual</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent border-transparent">
                                            <span class="timeline-point timeline-point-warning"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="mb-0">Julio</h6>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <small class="text-muted">Pago: Mensual</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="text-center">
                                            <a href="javascript:;">Ver Mas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit customer Modal -->
        <div class="modal fade" id="editCustomer" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Editar Informacion de Cliente</h3>
                            <p class="text-muted">Actualiza los datos permitidos.</p>
                        </div>
                        <form id="editCustomerForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editCustomerFirstName">Nombre(s)</label>
                                <input type="text" id="editCustomerFirstName" name="editCustomerFirstName"
                                    class="form-control" placeholder="Albert" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editCustomerLastName">Apellidos</label>
                                <input type="text" id="editCustomerLastName" name="editCustomerLastName"
                                    class="form-control" placeholder="Cook" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editCustomerEmail">Email</label>
                                <input type="text" id="editCustomerEmail" name="editCustomerEmail" class="form-control"
                                    placeholder="albert@gmail.com" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editCustomerStatus">Status</label>
                                <select id="editCustomerStatus" name="editCustomerStatus" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option value="1" selected>Activo</option>
                                    <option value="2">Inactivo</option>
                                    <option value="3">Suspendido</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editCustomerPhone">Numero de Celular</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input type="text" id="editCustomerPhone" name="editCustomerPhone"
                                        class="form-control phone-number-mask" placeholder="(612) 123 123 0" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editCustomerPhoneEmergency">Numero Emergencia</label>
                                <div class="input-group">
                                    <span class="input-group-text">MX (+52)</span>
                                    <input type="text" id="editCustomerPhoneEmergency" name="editCustomerPhoneEmergency"
                                        class="form-control phone-number-mask" placeholder="(612) 123 123 9" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editCustomerFare">Tarifa</label>
                                <select id="editCustomerFare" name="editCustomerFare" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option selected>Tarifa</option>
                                    <option value="diario" selected>Diaria</option>
                                    <option value="mensual">Mensual</option>
                                    <option value="anual">Anual</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="editCustomerBlood">Tipo de sangre</label>
                                <select id="editCustomerBlood" name="editCustomerBlood" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option value="diario">A+</option>
                                    <option value="mensual">A-</option>
                                    <option value="anual">B+</option>
                                    <option value="diario">B-</option>
                                    <option value="mensual">AB+</option>
                                    <option value="anual">AB-</option>
                                    <option value="diario" selected>O+</option>
                                    <option value="mensual">O-</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="switch">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">¿Desea tener Entrenador Personal? + $150.00</span>
                                </label>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit customer Modal -->

        <!-- Payment customer modal-->
        <div class="modal fade" id="paymentCustomer" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-new-customer">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Pagar tarifa de Cliente</h3>
                            <p class="text-muted">Completa los datos.</p>
                        </div>
                        <form id="paymentCustomer" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="payCustomerName">Nombre Completo</label>
                                <input type="text" id="payCustomerName" name="payCustomerName" class="form-control"
                                    placeholder="Albert Cook" />
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="payCustomerFare">Tarifa</label>
                                <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option selected>Tarifa</option>
                                    <option value="diario" selected>Diaria $50.00 </option>
                                    <option value="mensual">Mensual $450.00 </option>
                                    <option value="anual">Anual $3000.00 </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="payCustomerFareDays">Cantidad de Dias, Meses, Años</label>
                                <input type="text" id="payCustomerFareDays" name="payCustomerFareDays" class="form-control"
                                    placeholder="4" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="payCustomerAmount">Monto a pagar</label>
                                <input type="text" id="payCustomerAmount" name="payCustomerAmount" class="form-control"
                                    placeholder="$200" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="payCustomerFare">Tipo de pago</label>
                                <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option value="efectivo" selected>Efectivo</option>
                                    <option value="tarjeta">Tarjeta </option>
                                    <option value="tranferencia">Transferencia</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="dobBasic" class="form-label">Fecha de Pago</label>
                                <input type="date" id="dobBasic" class="form-control">
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Pagar</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Payment customer modal-->
    </div>
</template>

