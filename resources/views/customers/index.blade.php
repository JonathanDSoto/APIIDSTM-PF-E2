@extends('layouts.app')
@section('contenido')

<div>
    <a href="{{ $customersPagination->previousPageUrl() }}">Previous</a>
    <a href="{{ $customersPagination->nextPageUrl() }}">Next</a>
</div>

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Clientes /</span> Lista de clientes
</h4>
<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        <span>CLIENTES</span>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCustomer" href="javascript:void(0);">
            <i class="ti ti-plus me-1"></i> Añadir Cliente nuevo
        </a>
    </h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th style="padding-left: 3%;">Telefono</th>
                    <th>Correo</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($customersPagination as $customer)
                <tr>
                    <td>
                        <a class="link-dark" href="{{ route('customers.show', ['id' => $customer->id]) }}">
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Albert Cook">
                                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle"> {{ $customer->name }}
                                </li>
                            </ul>
                        </a>
                    </td>
                    <td style="padding-left: 3%;">{{ $customer->phone }}</td>
                    <td>
                        <?php
                        if ($customer->email == '' || $customer->email == null) {
                        ?>
                            No tiene
                        <?php } else { ?>
                            {{ $customer->email }}
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($customer->is_active == 1) { ?>
                            <span class="badge bg-label-success me-1">Activo</span>
                        <?php
                        } else { ?>
                            <span class="badge bg-label-primary me-1">Inactivo</span>
                        <?php } ?>
                    </td>
                    <td class="text-end">
                        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editCustomer" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> Editar
                        </a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCustomer" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> Borrar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- New customer Modal -->
    <div class="modal fade" id="newCustomer" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-new-customer">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
                <h3 class="mb-2">Añadir Cliente</h3>
                <p class="text-muted">Ingresa todos los datos.</p>
            </div>
            <form id="newCustomerForm" class="row g-3" onsubmit="return false">
                <div class="col-12 col-md-6">
                <label class="form-label" for="newCustomerFirstName">Nombre(s)</label>
                <input type="text" id="newCustomerFirstName" name="newCustomerFirstName" class="form-control" placeholder="Albert" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="newCustomerLastName">Apellidos</label>
                <input type="text" id="newCustomerLastName" name="newCustomerLastName" class="form-control" placeholder="Cook" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="newCustomerEmail">Email</label>
                <input type="text" id="newCustomerEmail" name="newCustomerEmail" class="form-control" placeholder="albert@gmail.com" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="newCustomerPhone">Numero de Celular</label>
                <div class="input-group">
                    <span class="input-group-text">MX (+52)</span>
                    <input type="text" id="newCustomerPhone" name="newCustomerPhone" class="form-control phone-number-mask" placeholder="(612) 000 000 0" />
                </div>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="newCustomerPhoneEmergency">Numero Emergencia</label>
                <div class="input-group">
                    <span class="input-group-text">MX (+52)</span>
                    <input type="text" id="newCustomerPhoneEmergency" name="newCustomerPhoneEmergency" class="form-control phone-number-mask" placeholder="(612) 000 000 0" />
                </div>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="newCustomerFare">Tarifa</label>
                <select id="newCustomerFare" name="newCustomerFare" class="select2 form-select" aria-label="Default select example">
                    <option selected>Tarifa</option>
                    <option value="diario" selected>Diaria</option>
                    <option value="mensual">Mensual</option>
                    <option value="anual">Anual</option>
                </select>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="newCustomerBlood">Tipo de sangre</label>
                <select id="newCustomerBlood" name="newCustomerBlood" class="select2 form-select" aria-label="Default select example">
                    <option selected>Tipo sangre</option>
                    <option value="diario">A+</option>
                    <option value="mensual">A-</option>
                    <option value="anual">B+</option>
                    <option value="diario">B-</option>
                    <option value="mensual">AB+</option>
                    <option value="anual">AB-</option>
                    <option value="diario">O+</option>
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
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <!--/ New customer Modal -->

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
                <input type="text" id="editCustomerFirstName" name="editCustomerFirstName" class="form-control" placeholder="Albert" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="editCustomerLastName">Apellidos</label>
                <input type="text" id="editCustomerLastName" name="editCustomerLastName" class="form-control" placeholder="Cook" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="editCustomerEmail">Email</label>
                <input type="text" id="editCustomerEmail" name="editCustomerEmail" class="form-control" placeholder="albert@gmail.com" />
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="editCustomerStatus">Status</label>
                <select id="editCustomerStatus" name="editCustomerStatus" class="select2 form-select" aria-label="Default select example">
                    <option value="1" selected>Activo</option>
                    <option value="2">Inactivo</option>
                    <option value="3">Suspendido</option>
                </select>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="editCustomerPhone">Numero de Celular</label>
                <div class="input-group">
                    <span class="input-group-text">MX (+52)</span>
                    <input type="text" id="editCustomerPhone" name="editCustomerPhone" class="form-control phone-number-mask" placeholder="(612) 123 123 0" />
                </div>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="editCustomerPhoneEmergency">Numero Emergencia</label>
                <div class="input-group">
                    <span class="input-group-text">MX (+52)</span>
                    <input type="text" id="editCustomerPhoneEmergency" name="editCustomerPhoneEmergency" class="form-control phone-number-mask" placeholder="(612) 123 123 9" />
                </div>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="editCustomerFare">Tarifa</label>
                <select id="editCustomerFare" name="editCustomerFare" class="select2 form-select" aria-label="Default select example">
                    <option selected>Tarifa</option>
                    <option value="diario" selected>Diaria</option>
                    <option value="mensual">Mensual</option>
                    <option value="anual">Anual</option>
                </select>
                </div>
                <div class="col-12 col-md-6">
                <label class="form-label" for="editCustomerBlood">Tipo de sangre</label>
                <select id="editCustomerBlood" name="editCustomerBlood" class="select2 form-select" aria-label="Default select example">
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
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <!--/ Edit customer Modal -->

    <!-- Delete customer Modal -->
    <div class="modal fade" id="deleteCustomer" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-delete-customer">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
                <h3 class="mb-2">Eliminar Cliente</h3>
            </div>
            <form id="deleteCustomerForm" class="row g-3" onsubmit="return false">
                <div class="col-12 text-center">
                <h4 class="text-center" for="modalDeleteCustomer">¿Desea eliminar el cliente seleccionado?</h4>
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
    <!--/ Delete customer Modal -->



</div>
@endsection
