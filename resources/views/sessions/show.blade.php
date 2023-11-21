@extends('layouts.app') 
@section('contenido')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                    <img src="../../assets/img/favicon/ejercicio.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                    <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                        <div class="user-profile-info">
                            <h4>Entrenamiento Funcional</h4>
                            <p>"Haz que cada movimiento cuente, entrena para la vida diaria."</p>
                        </div>
                        <div class="order-md-2">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editSession" href="javascript:void(0);">
                                <i class="ti ti-pencil me-1"></i> Editar clase 
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
                                <i class="ti ti-check text-heading"></i>
                                <span class="fw-medium mx-2 text-heading">Nombre de la Clase:</span>
                                <span>Entrenamiento Funcional</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="fas fa-users text-heading"></i>
                                <span class="fw-medium mx-2 text-heading">Entrenadores:</span>
                                <span>Mark Martin</span>
                            </li>
                            <li class="d-flex flex-column align-items-start mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-clock text-heading me-2"></i>
                                    <span class="fw-medium text-heading">Horarios:</span>
                                </div>
                                <span>Lunes-Martes:  8:00 AM - 9:00 AM</span>
                                <span>Miércoles:  5:00 PM - 6:00 PM</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-comment text-heading"></i>
                                    <span class="fw-medium mx-2 text-heading">Descripción:</span>
                                </div>
                                <li>
                                    <span>"Haz que cada movimiento cuente, entrena para la vida diaria."</span>
                                </li>
                            </li>
                        </ul>
                        <small class="card-text text-uppercase">Capacidad</small>
                        <ul class="list-unstyled mb-4 mt-3">
                            <li class="d-flex align-items-center mb-3">
                                <i class="fas fa-user-times text-heading"></i>
                                <span class="fw-medium mx-2 text-heading">Capacidad Máxima:</span>
                                <span>40</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="fas fa-user-lock text-heading"></i>
                                <span class="fw-medium mx-2 text-heading">Espacios Reservados:</span>
                                <span>30</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="fas fa-user-plus text-heading"></i>
                                <span class="fw-medium mx-2 text-heading">Espacios Disponibles:</span>
                                <span>10</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- ASISTENCIAS -->
        <div class="col-xl-7 col-lg-7 col-md-7">
            <div class="row">  
                <div class="col-lg-12 col-xl-12">
                    <div class="card card-action mb-4">
                        <div class="card-header align-items-center">
                            <h5 class="card-action-title mb-0">Historial de asistencias en la clase</h5>
                            <div class="card-action-element">
                                <div>
                                    <span>
                                        <i class="ti ti-users ti-sm"></i>
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
                                                <small class="text-muted">Horario:</small>
                                                <small class="text-muted">8:00 AM - 9:00 AM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item timeline-item-transparent">
                                        <span class="timeline-point timeline-point-primary"></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header">
                                                <h6 class="mb-0">Martes</h6>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <small class="text-muted">Horario:</small>
                                                <small class="text-muted">8:00 AM - 9:00 AM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item timeline-item-transparent">
                                        <span class="timeline-point timeline-point-primary"></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header">
                                                <h6 class="mb-0">Miercoles</h6>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <small class="text-muted">Horario:</small>
                                                <small class="text-muted">5:00 PM - 6:00 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item timeline-item-transparent">
                                        <span class="timeline-point timeline-point-primary"></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header">
                                                <h6 class="mb-0">Lunes</h6>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <small class="text-muted">Horario:</small>
                                                <small class="text-muted">8:00 AM - 9:00 AM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item timeline-item-transparent">
                                        <span class="timeline-point timeline-point-danger"></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header">
                                                <h6 class="mb-0">Martes</h6>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <small class="text-muted">Horario:</small>
                                                <small class="text-muted">Cancelada</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item timeline-item-transparent">
                                        <span class="timeline-point timeline-point-primary"></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header">
                                                <h6 class="mb-0">Miercoles</h6>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <small class="text-muted">Horario:</small>
                                                <small class="text-muted">5:00 PM - 6:00 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <li class="text-center">
                                    <a href="javascript:;">Ver Mas</a>
                                </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!--/ ASISTENCIAS -->
        
        <!-- CLIENTES POR CLASE  -->
        <div class="col-lg-12 col-xl-12">
            <div class="card card-action mb-4">
                <div class="card-header align-items-center">
                    <h5 class="card-action-title mb-0">Cientes incritos en la clase</h5>
                    <div class="card-action-element">
                        <div>
                            <span>
                                <i class="ti ti-users ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Horario</th>
                                    <th>Asistencia Mensual</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>Albert Cook</td>
                                    <td>8:00 AM - 9:00 AM & 3:00 PM - 4:00 PM</td>
                                    <td>10 veces</td>
                                </tr>
                                <tr>
                                    <td>Barry Hunter</td>
                                    <td>3:00 PM - 4:00 PM</td>
                                    <td>1 veces</td>
                                </tr>
                                <tr>
                                    <td>Trevor Baker</td>
                                    <td>10:00 AM - 11:00 AM </td>
                                    <td>3 veces</td>
                                </tr>
                                <tr>
                                    <td>Emma Johnson</td>
                                    <td>10:00 AM - 11:00 AM & 3:00 PM - 4:00 PM</td>
                                    <td>15 veces</td>
                                </tr>
                                <tr>
                                    <td>Noah Smith</td>
                                    <td>9:00 AM - 10:00 AM & 5:00 PM - 6:00 PM</td>
                                    <td>10 veces</td>
                                </tr>
                                <tr>
                                    <td>Jeff Pilot</td>
                                    <td>8:00 AM - 9:00 AM & 3:00 PM - 4:00 PM</td>
                                    <td>6 veces</td>
                                </tr>
                                <tr>
                                    <td>Michael Jones</td>
                                    <td>3:00 PM - 4:00 PM</td>
                                    <td>5 veces</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ CLIENTES POR CLASE -->
    </div>

    <!-- EDITAR CLASE -->
    <div class="modal fade" id="editSession" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <h3 class="mb-2">Edita la clase</h3>
                        <p>Edita los datos permitidos</p>
                    </div>
                    <form id="EditCustomerSession" class="row g-3" onsubmit="return false">
                        <div class="col-12 col-md-12">
                            <label for="selectCustomer" class="form-label">Ingresa el nombre de la clase</label>
                            <input type="text" id="modalEditSession" name="modalEditSession" class="form-control" placeholder="Entrenamiento Funcional" />
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="horaInicial" class="form-label">Hora Inicial:</label>
                                    <input type="time" class="form-control" id="horaInicial" name="horaInicialSession">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="horaFinal" class="form-label">Hora Final:</label>
                                    <input type="time" class="form-control" id="horaFinal" name="horaFinalSession">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalSessionInstructor">Entrenador/Instructor</label>
                            <input type="text" id="modalSessionInstructor" name="modalSessionInstructor" class="form-control" placeholder="Mark Martin" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="selectDay" class="form-label">Selecciona el dia</label>
                                <select id="selectDay" class="form-select form-select-lg share-project-select" data-allow-clear="true">
                                <option value="dia" select>Dia de la semana</option>
                                <option value="lunes">Lunes</option>
                                <option value="martes">Martes</option>
                                <option value="miercoles">Miercoles </option>
                                <option value="jueves">Jueves</option>
                                <option value="viernes">Viernes </option>
                                <option value="sabado">Sabado </option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="capacity" class="form-label">Capacidad Maxima de personas:</label>
                            <input type="number" class="form-control" id="numero" name="numero" >
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Editar</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ EDITAR CLASE -->
</div> 
@endsection