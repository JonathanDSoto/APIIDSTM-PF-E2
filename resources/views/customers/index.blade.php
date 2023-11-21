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
        <a class="btn btn-primary" href="javascript:void(0);">
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
                        <a class="btn btn-success" href="javascript:void(0);">
                            <i class="ti ti-pencil me-1"></i> Editar
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i> Borrar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
