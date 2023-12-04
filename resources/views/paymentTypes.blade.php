@extends('layouts.app')
@section('contenido')
<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        <span>TIPOS DE PAGOS</span>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCustomer" href="javascript:void(0);">
            <i class="ti ti-plus me-1"></i> Añadir Tipo de Pago
        </a>
    </h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre de tipo de pago</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>Efectivo</td>
                    <td class="text-end">
                        <a class="btn btn-success me-1" href="javascript:void(0);">
                            <i class="ti ti-pencil "></i> 
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash"></i> 
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Tarjeta</td>
                    <td class="text-end">
                        <a class="btn btn-success me-1" href="javascript:void(0);">
                            <i class="ti ti-pencil "></i> 
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash"></i> 
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Transferencia</td>
                    <td class="text-end">
                        <a class="btn btn-success me-1" href="javascript:void(0);">
                            <i class="ti ti-pencil "></i> 
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash"></i> 
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection