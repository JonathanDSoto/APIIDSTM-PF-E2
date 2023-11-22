@extends('layouts.app') 
@section('contenido')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Clases /</span> Clases Disponibles
</h4>

<div class="row mb-4">
    <div class="col-12 text-end mb-2">
        <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#newSession" href="javascript:void(0);">
            <i class="ti ti-plus me-1"></i> Añadir Clase 
        </a>
    </div>
    <!--  Entrenamiento Funcional -->
    <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="card position-relative">
            <div class="card-body text-center">
                <a href="/session">
                    <i class="mb-3 fas fa-dumbbell ti-lg"></i>
                </a>
                <h5>Entrenamiento Funcional</h5>
                <p>"Haz que cada movimiento cuente, entrena para la vida diaria."</p>
                <div class="d-flex flex-column justify-content-between align-items-center mt-3 gap-3">
                    <small>Capacidad: 40 personas</small>
                    <small>Reservado: 30 personas</small>
                    <small>Disponible: 10 personas</small>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#reserveSession"  href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                    </a>
                    <a type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#editSession"  href="javascript:void(0);">
                        <i class="ti ti-pencil"></i>
                    </a>
                    <a type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteSession" href="javascript:void(0);">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/  Entrenamiento Funcional -->

    <!--  Spinning-->
    <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="mb-3 fas fa-dumbbell ti-lg"></i>
                <h5>Spinning</h5>
                <p> "Pedalea hacia tu mejor versión, ¡siente la energía en cada pedaleo!."</p>
                <div class="d-flex flex-column justify-content-between align-items-center mt-3 gap-3">
                    <small>Capacidad: 40 personas</small>
                    <small>Reservado: 30 personas</small>
                    <small>Disponible: 10 personas</small>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#reserveSession"  href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                    </a>                    
                    <a type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#editSession"  href="javascript:void(0);">
                        <i class="ti ti-pencil"></i>
                    </a>
                    <a type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteSession" href="javascript:void(0);">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/  Spinning -->

    <!--  Boxeo -->
    <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="mb-3 fas fa-dumbbell ti-lg"></i>
                <h5>Boxeo</h5>
                <p> "Golpea tus metas, libera el estrés, sé fuerte como un boxeador."</p>
                <div class="d-flex flex-column justify-content-between align-items-center mt-3 gap-3">
                    <small>Capacidad: 40 personas</small>
                    <small>Reservado: 30 personas</small>
                    <small>Disponible: 10 personas</small>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#reserveSession"  href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                    </a>                    
                    <a type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#editSession"  href="javascript:void(0);">
                        <i class="ti ti-pencil"></i>
                    </a>
                    <a type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteSession" href="javascript:void(0);">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/  Boxeo -->

    <!--  pilates -->
    <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="mb-3 fas fa-dumbbell ti-lg"></i>
                <h5>Pilates</h5>
                <p>"Fortalece tu núcleo, construye un cuerpo fuerte desde adentro hacia afuera."</p>
                <div class="d-flex flex-column justify-content-between align-items-center mt-3 gap-3">
                    <small>Capacidad: 40 personas</small>
                    <small>Reservado: 30 personas</small>
                    <small>Disponible: 10 personas</small>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#reserveSession"  href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                    </a>                    
                    <a type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#editSession"  href="javascript:void(0);">
                        <i class="ti ti-pencil"></i>
                    </a>
                    <a type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteSession" href="javascript:void(0);">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/ pilates -->

    <!--  Yoga -->
    <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="mb-3 fas fa-dumbbell ti-lg"></i>
                <h5>Yoga</h5>
                <p>"Encuentra tu punto de equilibrio interior, cuerpo y mente en armonía."</p>
                <div class="d-flex flex-column justify-content-between align-items-center mt-3 gap-3">
                    <small>Capacidad: 40 personas</small>
                    <small>Reservado: 30 personas</small>
                    <small>Disponible: 10 personas</small>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#reserveSession"  href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                    </a>                    
                    <a type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#editSession"  href="javascript:void(0);">
                        <i class="ti ti-pencil"></i>
                    </a>
                    <a type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteSession" href="javascript:void(0);">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>        
            </div>
        </div>
    </div>
    <!--/  Yoga -->

    <!--  Acondicionamiento Fisico -->
    <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="mb-3 fas fa-dumbbell ti-lg"></i>
                <h5>Acondicionamiento Fisico</h5>
                <p>"Transforma tu cuerpo, supera tus límites, ¡siente el poder del acondicionamiento!"</p>
                <div class="d-flex flex-column justify-content-between align-items-center mt-3 gap-3">
                    <small>Capacidad: 40 personas</small>
                    <small>Reservado: 30 personas</small>
                    <small>Disponible: 10 personas</small>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#reserveSession"  href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                    </a>                    
                    <a type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#editSession"  href="javascript:void(0);">
                        <i class="ti ti-pencil"></i>
                    </a>
                    <a type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteSession" href="javascript:void(0);">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>        
            </div>
        </div>
    </div>
    <!--/  Acondicionamiento Fisico -->

    <!--  Pesas -->
    <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="mb-3 fas fa-dumbbell ti-lg"></i>
                <h5>Pesas</h5>
                <p>"Carga tus sueños, descarga tus excusas. El hierro no miente, el trabajo duro siempre paga."</p>
                <div class="d-flex flex-column justify-content-between align-items-center mt-3 gap-3">
                    <small>Capacidad: 40 personas</small>
                    <small>Reservado: 30 personas</small>
                    <small>Disponible: 10 personas</small>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#reserveSession"  href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                    </a>                    
                    <a type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#editSession"  href="javascript:void(0);">
                        <i class="ti ti-pencil"></i>
                    </a>
                    <a type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteSession" href="javascript:void(0);">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>            
            </div>
        </div>
    </div>
    <!--/  Pesas -->

    <!-- HIIT -->
    <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="mb-3 fas fa-dumbbell ti-lg"></i>
                <h5>HIIT (Alta Intensidad)</h5>
                <p>"Quema más, suda más, vive más intensamente con cada intervalo."</p>
                <div class="d-flex flex-column justify-content-between align-items-center mt-3 gap-3">
                    <small>Capacidad: 40 personas</small>
                    <small>Reservado: 30 personas</small>
                    <small>Disponible: 10 personas</small>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#reserveSession"  href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                    </a>                    
                    <a type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#editSession"  href="javascript:void(0);">
                        <i class="ti ti-pencil"></i>
                    </a>
                    <a type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteSession" href="javascript:void(0);">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>           
            </div>
        </div>
    </div>
    <!--/  HIIT -->


    <!-- ####################################################################################### -->

    <!-- MODAL RESERVAR EN UNA CLASE -->
    <div class="modal fade" id="reserveSession" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <h3 class="mb-2">Reservar un espacio en la clase</h3>
                        <p>Ingresa los datos solicitados para reservar una clase</p>
                    </div>
                    <form id="reserveCustomerSession" class="row g-3" onsubmit="return false">
                        <div class="col-12 col-md-12">
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
                            <label for="selectCustomer" class="form-label">Entrenador/Instructor</label>
                            <select id="selectCustomer" class="form-select form-select-lg share-project-select" data-allow-clear="true">
                            <option select>Selecciona un entrenador</option>
                            <option data-name="markMartin" data-image="">Mark Martin</option>
                            <option data-name="paulThompson" data-image="">Paul Thompson</option>
                            <option data-name="georgeGarcia" data-image="">George Garcia</option>
                            <option data-name="stevenRobinson" data-image="">Steven Robinson</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="selectCustomer" class="form-label">Selecciona el dia</label>
                            <select id="selectCustomer" class="form-select form-select-lg share-project-select" data-allow-clear="true">
                            <option value="dia" select >Dias</option>
                            <option value="lunes">Lunes</option>
                            <option value="martes">Martes</option>
                            <option value="miercoles">Miercoles </option>
                            <option value="jueves">Jueves</option>
                            <option value="viernes">Viernes </option>
                            <option value="sabado">Sabado </option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="selectCustomer" class="form-label">Selecciona el horario</label>
                            <select id="selectCustomer" class="form-select form-select-lg share-project-select" data-allow-clear="true">
                            <option value="horario" select >Horario</option>
                            <option value="horario1">10am - 11am </option>
                            <option value="horario2">11am - 12pm </option>
                            <option value="horario3">1pm- 2pm </option>
                            <option value="horario4">3pm - 4pm </option>
                            <option value="horario5">6pm - 7pm </option>
                            <option value="horario6">7pm - 8pm </option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                          <button type="submit" class="btn btn-primary me-sm-3 me-1">Reservar</button>
                          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ MODAL RESERVAR EN UNA CLASE -->

    <!-- AGREGAR CLASE -->
    <div class="modal fade" id="newSession" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <h3 class="mb-2">Añade una nueva clase</h3>
                        <p>Ingresa los datos solicitados para añadir una nueva clase</p>
                    </div>
                    <form id="newCustomerSession" class="row g-3" onsubmit="return false">
                        <div class="col-12 col-md-12">
                            <label for="selectCustomer" class="form-label">Ingresa el nombre de la clase</label>
                            <input type="text" id="modalNewSession" name="modalNewSession" class="form-control" placeholder="Entrenamiento Funcional" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalNewSessionInstructor">Entrenador/Instructor</label>
                            <input type="text" id="modalNewSessionInstructor" name="modalNewSessionInstructor" class="form-control" placeholder="Mark Martin" />
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
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="numero" class="form-label">Capacidad Maxima de personas:</label>
                            <input type="number" class="form-control" id="numero" name="numero" >
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Añadir</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ AGREGAR CLASE -->

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
                        <div class="row 12">
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

    <!-- ELIMINAR CLASE -->
    <div class="modal fade" id="deleteSession" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <h3 class="mb-2">Eliminar clase</h3>
                    </div>
                    <form id="reserveCustomerSession" class="row g-3" onsubmit="return false">
                        <div class="col-12 text-center">
                            <h4 class="text-center" for="modalDeleteSession">¿Desea eliminar la clase seleccionada?</h4>
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
    <!--/ ELIMINAR CLASE -->
</div>
@endsection