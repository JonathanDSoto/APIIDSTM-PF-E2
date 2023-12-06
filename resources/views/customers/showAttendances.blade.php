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
    <!-- INFORMACION -->
    <div class="col-lg-12 col-xl-12">
        <div class="card card-action mb-4">
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Historial de Asistencias</h5>
                <div class="card-action-element">
                    <div> 
                        <i class="ti ti-calendar ti-sm"></i>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre de la clase</th>
                            <th>Dia de la clase</th>
                            <th>Horario de la clase</th>
                            <th>Asistencia</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>Boxeo</td>
                            <td> Lunes</td>
                            <td>8am - 9am </td>
                            <td>
                                <span class="badge bg-label-success me-1">Asistio</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Spinning</td>
                            <td> Martes</td>
                            <td>9am - 10am </td>
                            <td>
                                <span class="badge bg-label-danger me-1">No Asistio</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Entrenamiento Funcional</td>
                            <td> Martes</td>
                            <td>4pm - 5pm </td>
                            <td>
                                <span class="badge bg-label-success me-1">Asistio</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Boxeo</td>
                            <td> Viernes</td>
                            <td>11am - 12pm </td>
                            <td>
                                <span class="badge bg-label-danger me-1">No Asistio</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
</div> 
@endsection