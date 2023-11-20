@extends('layouts.app') 
@section('contenido') 
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                    <img src="../../assets/img/avatars/7.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                    <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                        <div class="user-profile-info">
                            <h4>Mark Martin</h4>
                            <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                <li class="list-inline-item d-flex gap-1">
                                    <span class="badge bg-label-success me-1">
                                       <i class="fas fa-dumbbell"> </i>  Entrenamiento Funcional
                                    </span>
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
    <!-- INFORMACION -->
    <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-5">
            <div class="card mb-4">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-action-title mb-0">Informacion</h5>
                    <div class="card-action-element">
                        <div>
                            <span>
                                <i class="ti ti-message-dots ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-user text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Nombre Completo:</span>
                            <span>Mark Martin</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-check text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Status:</span>
                            <span>Activo</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-dumbbell text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Especialidad/Clase:</span>
                            <span>Entrenamiento Funcional</span>
                        </li>
                    </ul>
                    <small class="card-text text-uppercase">Contacto</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-phone-call text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Contacto:</span>
                            <span>(612) 123 123 0</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-mail text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Email:</span>
                            <span>Mark@gmail.com</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-phone-call text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Emergencia:</span>
                            <span>(612) 123 128 9</span>
                        </li>
                    </ul>
                    <small class="card-text text-uppercase">Salud</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-tint text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Tipo de Sangre:</span>
                            <span>O-</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-7 col-lg-7 col-md-7">
        <div class="row">
            <!-- ASISTENCIA -->
            <div class="col-lg-12 col-xl-12">
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Clases</h5>
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
                                    <small class="text-muted">Horario: 8am-9am & 3pm-4pm</small>
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
                                    <small class="text-muted">Horario: 10am-11am & 3pm-4pm</small>
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
                                    <small class="text-muted">Horario: 10am-11am & 2pm-3pm</small>
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
                                    <small class="text-muted">Horario: 10am-11am & 3pm-4pm</small>
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
                                    <small class="text-muted">Horario: 10am-11am & 5pm-6pm</small>
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
    </div>
</div> 
@endsection