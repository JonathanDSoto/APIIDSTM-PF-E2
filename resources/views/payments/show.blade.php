@extends('layouts.app') 
@section('contenido')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                    <img src="../../assets/img/avatars/5.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                    <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                        <div class="user-profile-info">
                            <h4>Albert Cook</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-12">
        <div class="card card-action mb-4">
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Historial de Pagos</h5>
                <div class="card-action-element">
                    <div> 
                        <i class="ti ti-currency-dollar ti-sm"></i>
                        <!-- <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#paymentCustomer" type="button">
                            <i class="ti ti-currency-dollar ti-sm"></i>
                        </button> -->
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Tarifa</th>
                            <th>Status</th>
                            <th>Tipo de Pago</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Albert Cook">
                                        <i class="ti ti-calendar me-1"></i> 02 Mayo 2023
                                    </li>
                                </ul>
                            </td>
                            <td>Diario</td>
                            <td>
                                <span class="badge bg-label-success me-1">Pagado</span>
                            </td>
                            <td> Trasferencia</td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Albert Cook">
                                        <i class="ti ti-calendar me-1"></i> Abril 2023
                                    </li>
                                </ul>
                            </td>
                            <td>Mensual</td>
                            <td>
                                <span class="badge bg-label-success me-1">Pagado</span>
                            </td>
                            <td> Tarjeta</td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Albert Cook">
                                        <i class="ti ti-calendar me-1"></i> Marzo 2023
                                    </li>
                                </ul>
                            </td>
                            <td>Mensual</td>
                            <td>
                                <span class="badge bg-label-success me-1">Pagado</span>
                            </td>
                            <td> Efectivo</td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Albert Cook">
                                        <i class="ti ti-calendar me-1"></i> Febrero 2023
                                    </li>
                                </ul>
                            </td>
                            <td>Mensual</td>
                            <td>
                                <span class="badge bg-label-success me-1">Pagado</span>
                            </td>
                            <td>Efectivo</td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Albert Cook">
                                        <i class="ti ti-calendar me-1"></i> Enero 2022
                                    </li>
                                </ul>
                            </td>
                            <td>Anual</td>
                            <td>
                                <span class="badge bg-label-success me-1">pagado</span>
                            </td>
                            <td>Transferencia</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection