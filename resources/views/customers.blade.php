@extends('layouts.app') 
@section('contenido') 
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Clientes /</span> Lista de clientes
</h4>
<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        <span>CLIENTES</span>
        <a class="btn btn-primary" href="javascript:void(0);">
            <i class="ti ti-plus me-1"></i> Añadir Cliente nuevo 
        </a>
    </h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Status</th>
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
                    <td>(612) 123 123 0</td>
                    <td> albert@gmail.com</td>
                    <td>
                        <span class="badge bg-label-success me-1">Activo</span>
                    </td>
                    <td class="text-end">
                        <a class="btn btn-success" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> Editar 
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> Borrar 
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
                    <td>(612) 321 321 0</td>
                    <td> barry@gmail.com</td>
                    <td>
                        <span class="badge bg-label-success me-1">Activo</span>
                    </td>
                    <td class="text-end">
                        <a class="btn btn-success" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> Editar 
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> Borrar 
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
                    <td>(612) 111 222 3</td>
                    <td> trevor@gmail.com</td>
                    <td>
                        <span class="badge bg-label-primary me-1">Inactivo</span>
                    </td>
                    <td class="text-end">
                        <a class="btn btn-success" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> Editar 
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> Borrar 
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Emma Johnson">
                                <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"> Emma Johnson
                            </li>
                        </ul>
                    </td>
                    <td>(612) 333 444 5</td>
                    <td>emma@gmail.com</td>
                    <td>
                        <span class="badge bg-label-success me-1">Activo</span>
                    </td>
                    <td class="text-end">
                        <a class="btn btn-success" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> Editar 
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> Borrar 
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
                    <td>(612) 555 666 7</td>
                    <td>noah@gmail.com</td>
                    <td>
                        <span class="badge bg-label-primary me-1">Inactivo</span>
                    </td>
                    <td class="text-end">
                        <a class="btn btn-success" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> Editar 
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> Borrar 
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div> 
@endsection