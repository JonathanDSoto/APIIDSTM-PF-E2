@extends('layouts.app')
@section('contenido') 
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                    <img src="../../assets/img/avatars/2.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                    <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                        <div class="user-profile-info">
                            <h4>Marielena Nuñez Romero</h4>
                            <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                <li class="list-inline-item d-flex gap-1">
                                    <span class="badge bg-label-success me-1">
                                       <i class="ti ti-user"> </i>  Administrador
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="order-md-2">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAdmin" href="javascript:void(0);">
                                <i class="ti ti-pencil me-1"></i> Editar informacion 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- INFORMACION -->
    <div class="row">
        <div class="col-12">
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
                                <span>Marielena Nuñez Romero</span>
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
                                <span>mari@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- edit admin -->
    <div class="modal fade" id="editAdmin" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-admin">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
                <h3 class="mb-2">Editar Informacion de Administrador</h3>
                <p class="text-muted">Actualiza los datos permitidos.</p>
            </div>
            <form id="editAdminForm" class="row g-3" onsubmit="return false">
                <div class="col-12 col-md-6">
                    <label class="form-label" for="editAdminFirstName">Nombre(s)</label>
                    <input type="text" id="editAdminFirstName" name="editAdminrFirstName" class="form-control" placeholder="Marielena" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="editAdminLastName">Apellidos</label>
                    <input type="text" id="editAdminLastName" name="editAdminrLastName" class="form-control" placeholder="Nuñez Romero" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="editAdminEmail">Email</label>
                    <input type="text" id="editAdminEmail" name="editAdminEmail" class="form-control" placeholder="albert@gmail.com" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="editAdminPhone">Numero de Celular</label>
                    <div class="input-group">
                        <span class="input-group-text">MX (+52)</span>
                        <input type="text" id="editAdminPhone" name="editAdminPhone" class="form-control phone-number-mask" placeholder="(612) 123 123 0" />
                    </div>
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
    <!--/ edit admin -->
</div> 
@endsection