@extends('layouts.app')
@section('contenido')
<!-- {{$customer}} -->
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
                            <h4>{{$customer->name}}</h4>
                            <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                <li class="list-inline-item d-flex gap-1">
                                    <span class="badge bg-label-warning me-1">
                                        <i class='ti ti-currency-dollar'></i> Pago Pendiente </span>
                                </li>
                            </ul>
                        </div>
                        <div class="order-md-2">
                            <a class="btn btn-primary" href="javascript:void(0);">
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
            <customer-info
            :name='{{ json_encode($customer->name) }}'
            :status="{{ json_encode($customer->is_active)}}"
            :phone='{{ json_encode($customer->phone) }}'
            :email='{{ json_encode($customer->email) }}'
            :emergency_phone='{{ json_encode($customer->emergency_phone) }}'
            :blood_type='{{ json_encode($customer->bloodGroup->name) }}'
            />
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
                                    <button class="btn btn-primary btn-sm" type="button">
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
        @endsection
