@extends('layouts.app') 
@section('contenido') 
<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        <span>PAGOS</span>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPayment" href="javascript:void(0);">
            <i class="ti ti-cash me-1"></i> Realizar pago
        </a>
    </h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Tarifa</th>
                    <th>Status</th>
                    <th>Tipo de Pago</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Albert Cook">
                                <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle"> Albert Cook
                            </li>
                        </ul>
                    </td>
                    <td>Diario</td>
                    <td>
                        <span class="badge bg-label-success me-1">Pagado</span>
                    </td>
                    <td> Trasferencia</td>
                    <td class="text-end">
                        <a class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#newPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-cash me-1"></i> Pagar 
                        </a>
                        <a class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#editPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> 
                        </a>
                        <a class="btn btn-danger ti-sm" data-bs-toggle="modal" data-bs-target="#deletePaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> 
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Barry Hunter">
                                <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"> Barry Hunter
                            </li>
                        </ul>
                    </td>
                    <td>Mensual</td>
                    <td>
                        <span class="badge bg-label-warning me-1">Pendiente</span>
                    </td>
                    <td> Tarjeta</td>
                    <td class="text-end">
                        <a class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#newPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-cash me-1"></i> Pagar 
                        </a>
                        <a class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#editPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> 
                        </a>
                        <a class="btn btn-danger ti-sm" data-bs-toggle="modal" data-bs-target="#deletePaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> 
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Trevor Baker">
                                <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle"> Trevor Baker
                            </li>
                        </ul>
                    </td>
                    <td>Mensual</td>
                    <td>
                        <span class="badge bg-label-success me-1">Pagado</span>
                    </td>
                    <td> Efectivo</td>
                    <td class="text-end">
                        <a class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#newPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-cash me-1"></i> Pagar 
                        </a>
                        <a class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#editPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> 
                        </a>
                        <a class="btn btn-danger ti-sm" data-bs-toggle="modal" data-bs-target="#deletePaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> 
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Emma Johnson">
                                <img src="../../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle"> Emma Johnson
                            </li>
                        </ul>
                    </td>
                    <td>Mensual</td>
                    <td>
                        <span class="badge bg-label-warning me-1">Pendiente</span>
                    </td>
                    <td>Efectivo</td>
                    <td class="text-end">
                        <a class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#newPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-cash me-1"></i> Pagar 
                        </a>
                        <a class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#editPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> 
                        </a>
                        <a class="btn btn-danger ti-sm" data-bs-toggle="modal" data-bs-target="#deletePaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> 
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Noah Smith">
                                <img src="../../assets/img/avatars/8.png" alt="Avatar" class="rounded-circle"> Noah Smith
                            </li>
                        </ul>
                    </td>
                    <td>Anual</td>
                    <td>
                        <span class="badge bg-label-success me-1">pagado</span>
                    </td>
                    <td>Transferencia</td>
                    <td class="text-end">
                        <a class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#newPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-cash me-1"></i> Pagar 
                        </a>
                        <a class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#editPaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> 
                        </a>
                        <a class="btn btn-danger ti-sm" data-bs-toggle="modal" data-bs-target="#deletePaymentCustomer" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> 
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- New Payment modal-->
    <div class="modal fade" id="newPayment" tabindex="-1" aria-hidden="true">
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
                    <label for="selectCustomer" class="form-label">Selecciona el cliente</label>
                    <select id="selectCustomer" class="form-select form-select-lg share-project-select" data-allow-clear="true">
                        <option select>Selecciona un cliente</option>
                        <option data-name="Albert Cook" data-image="">Albert Cook</option>
                        <option data-name="Barry Hunter" data-image="">Barry Hunter</option>
                        <option data-name="Trevor Baker" data-image="">Trevor Baker</option>
                        <option data-name="Emma Jhonson" data-image="">Emma Jhonson</option>
                    </select>
                </div>

                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerFare">Tarifa</label>
                <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select" aria-label="Default select example">
                    <option selected>Tarifa</option>
                    <option value="diario" selected>Diaria $50.00 </option>
                    <option value="mensual">Mensual $450.00 </option>
                    <option value="anual">Anual $3000.00 </option>
                </select>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerFareDays">Cantidad de Dias, Meses, Años</label>
                <input type="text" id="payCustomerFareDays" name="payCustomerFareDays" class="form-control" placeholder="4" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerAmount">Monto a pagar</label>
                <input type="text" id="payCustomerAmount" name="payCustomerAmount" class="form-control" placeholder="$200" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerFare">Tipo de pago</label>
                <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select" aria-label="Default select example">
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
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <!--/ New Payment modal-->

    <!-- Payment customer modal-->
    <div class="modal fade" id="newPaymentCustomer" tabindex="-1" aria-hidden="true">
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
                <input type="text" id="payCustomerName" name="payCustomerName" class="form-control" placeholder="Albert Cook" />
                </div>

                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerFare">Tarifa</label>
                <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select" aria-label="Default select example">
                    <option selected>Tarifa</option>
                    <option value="diario" selected>Diaria $50.00 </option>
                    <option value="mensual">Mensual $450.00 </option>
                    <option value="anual">Anual $3000.00 </option>
                </select>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerFareDays">Cantidad de Dias, Meses, Años</label>
                <input type="text" id="payCustomerFareDays" name="payCustomerFareDays" class="form-control" placeholder="4" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerAmount">Monto a pagar</label>
                <input type="text" id="payCustomerAmount" name="payCustomerAmount" class="form-control" placeholder="$200" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerFare">Tipo de pago</label>
                <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select" aria-label="Default select example">
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
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <!--/ Payment customer modal-->

    <!-- Edit Payment customer modal-->
    <div class="modal fade" id="editPaymentCustomer" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-new-customer">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
                <h3 class="mb-2">Editar Pago de Cliente</h3>
                <p class="text-muted">Completa los datos.</p>
            </div>
            <form id="paymentCustomer" class="row g-3" onsubmit="return false">
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerName">Nombre Completo</label>
                <input type="text" id="payCustomerName" name="payCustomerName" class="form-control" placeholder="Albert Cook" />
                </div>

                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerFare">Tarifa</label>
                <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select" aria-label="Default select example">
                    <option selected>Tarifa</option>
                    <option value="diario" selected>Diaria $50.00 </option>
                    <option value="mensual">Mensual $450.00 </option>
                    <option value="anual">Anual $3000.00 </option>
                </select>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerFareDays">Cantidad de Dias, Meses, Años</label>
                <input type="text" id="payCustomerFareDays" name="payCustomerFareDays" class="form-control" placeholder="4" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerAmount">Monto a pagar</label>
                <input type="text" id="payCustomerAmount" name="payCustomerAmount" class="form-control" placeholder="$200" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="payCustomerFare">Tipo de pago</label>
                <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select" aria-label="Default select example">
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
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <!--/ Edit Payment customer modal-->

    <!-- Delete Payment customer Modal -->
    <div class="modal fade" id="deletePaymentCustomer" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-delete-payment">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">Eliminar Pago</h3>
                    </div>
                    <form id="deletePaymentForm" class="row g-3" onsubmit="return false">
                        <div class="col-12 text-center">
                            <h4 class="text-center" for="modalDeletePayment">¿Desea eliminar el pago seleccionado?</h4>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Eliminar</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Delete Payment customer Modal -->
</div> 
@endsection