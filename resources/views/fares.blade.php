@extends('layouts.app')
@section('contenido') 
<div class="card">
  <!-- TARIFAS -->
  <div class="pb-sm-5 pb-2 rounded-top">
    <div class="container py-5">
      <div class="d-flex flex-column align-items-center">
        <h2 class="text-center mb-2 mt-0 mt-md-4 me-0 fs-4">Tarifas de GymExpert</h2>
        <div class="ms-auto mb-3 me-5">
          <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newFare" href="javascript:void(0);">
            <i class="ti ti-plus me-1"></i> Añadir Tarifa
          </a>
        </div>  
      </div>
      <div class="row mx-0 gy-3 px-lg-5">
          <!-- DIARIA -->
          <div class="col-lg mb-md-0 mb-4">
            <div class="card border rounded shadow-none">
              <div class="card-body">
                <div class="my-3 pt-2 text-center">
                  <img src="../../assets/img/illustrations/page-pricing-basic.png" alt="Basic Image" height="100">
                </div>
                <h3 class="card-title text-center text-capitalize mb-1 fs-5">Diario</h3>
                <p class="text-center fs-6">Transforma tu día </p>
                <div class="text-center">
                  <div class="d-flex justify-content-center">
                    <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                    <h1 class="display-4 mb-0 text-primary fs-2">50</h1>
                    <sub class="h6 pricing-duration mt-auto mb-2 text-muted fw-normal fs-6">/dia</sub>
                  </div>
                </div>

                <ul class="ps-3 my-4 pt-2 fs-6">
                  <li class="mb-2">Acceso completo al gimnasio durante un día.</li>
                  <li class="mb-2">Uso de todas las áreas de entrenamiento.</li>
                  <li class="mb-2">Participación en clases grupales programadas.</li>
                </ul>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-success mx-3" data-bs-toggle="modal" data-bs-target="#editFare" href="javascript:void(0);">
                      <i class="ti ti-pencil"></i>
                  </a>
                  <a class="btn btn-danger mx-3" data-bs-toggle="modal" data-bs-target="#deleteFare" href="javascript:void(0);">
                      <i class="ti ti-trash"></i> 
                  </a>
                </div>  
              </div>
            </div>
          </div>

          <!-- MENSUAL -->
          <div class="col-lg mb-md-0 mb-4">
            <div class="card border-primary border shadow-none">
              <div class="card-body position-relative">
                <div class="position-absolute end-0 me-4 top-0 mt-4">
                  <span class="badge bg-label-primary fs-6">Popular</span>
                </div>
                <div class="my-3 pt-2 text-center">
                  <img src="../../assets/img/illustrations/page-pricing-standard.png" alt="Standard Image" height="100">
                </div>
                <h3 class="card-title text-center text-capitalize mb-1 fs-5">Mensual</h3>
                <p class="text-center fs-6">Transforma tu mes </p>
                <div class="text-center">
                  <div class="d-flex justify-content-center">
                    <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                    <h1 class="display-4 mb-0 text-primary fs-2">450</h1>
                    <sub class="h6 pricing-duration mt-auto mb-2 text-muted fw-normal fs-6">/mes</sub>
                  </div>
                </div>
                <ul class="ps-3 my-4 pt-2 fs-6">
                  <li class="mb-2">Acceso completo al gimnasio durante el mes.</li>
                  <li class="mb-2">Uso de todas las áreas de entrenamiento.</li>
                  <li class="mb-2">Participación en clases grupales programadas.</li>
                </ul>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-success mx-3" data-bs-toggle="modal" data-bs-target="#editFare" href="javascript:void(0);">
                      <i class="ti ti-pencil"></i>
                  </a>
                  <a class="btn btn-danger mx-3" data-bs-toggle="modal" data-bs-target="#deleteFare" href="javascript:void(0);">
                      <i class="ti ti-trash"></i> 
                  </a>
                </div>  
              </div>
            </div>
          </div>

          <!-- ANUAL -->
          <div class="col-lg">
            <div class="card border rounded shadow-none">
              <div class="card-body">

                <div class="my-3 pt-2 text-center">
                  <img src="../../assets/img/illustrations/page-pricing-enterprise.png" alt="Enterprise Image" height="100">
                </div>
                <h3 class="card-title text-center text-capitalize mb-1 fs-5">Anual</h3>
                <p class="text-center fs-6">Transforma tu año</p>

                <div class="text-center">
                  <div class="d-flex justify-content-center">
                    <sup class="h6 text-primary pricing-currency mt-3 mb-0 me-1">$</sup>
                    <h1 class="price-toggle price-yearly display-4 text-primary mb-0 fs-2">3000</h1>
                    <sub class="h6 pricing-duration mt-auto mb-2 fw-normal text-muted fs-6">/anual</sub>
                  </div>
                </div>

                <ul class="ps-3 my-4 pt-2 fs-6">
                  <li class="mb-2">Acceso completo al gimnasio durante todo el año.</li>
                  <li class="mb-2">Uso de todas las áreas de entrenamiento.</li>
                  <li class="mb-2">Participación en clases grupales programadas.</li>
                </ul>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-success mx-3" data-bs-toggle="modal" data-bs-target="#editFare" href="javascript:void(0);">
                      <i class="ti ti-pencil"></i>
                  </a>
                  <a class="btn btn-danger mx-3" data-bs-toggle="modal" data-bs-target="#deleteFare" href="javascript:void(0);">
                      <i class="ti ti-trash"></i> 
                  </a>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ TARIFAS -->

  <!-- MODAL # # # # # # # # # # # # # # # # # # # # # # # # # -->

  <!-- New Fare modal-->
  <div class="modal fade" id="newFare" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-new-fare">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Añadir tarifa nueva</h3>
            <p class="text-muted">Completa los datos.</p>
          </div>
          <form id="NewFare" class="row g-3" onsubmit="return false">
            <div class="col-12 col-md-12">
                <label class="form-label" for="newFareName">Nombre de la Tarifa</label>
                <input type="text" id="newFareName" name="newFareName" class="form-control" placeholder="Semanal" />
            </div>
            <div class="col-12 col-md-6">
                <label class="form-label" for="newFareCost">Costo</label>
                <input type="text" id="newFareCost" name="newFareCost" class="form-control" placeholder="$200" />
            </div>
            <div class="col-12 col-md-4">
                <label class="form-label" for="editInstructorBlood">Periodo</label>
                <select id="editInstructorBlood" name="editInstructorBlood" class="select2 form-select" aria-label="Default select example">
                    <option value="diario">Diario</option>
                    <option value="mensual">Mensual</option>
                    <option value="anual">Anual</option>
                </select>
            </div>
            <div class="col-12 col-md-1 d-flex align-items-end">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPeriod" href="javascript:void(0);">
                    <i class="ti ti-plus me-1"></i> 
                </a>
            </div>
            <div class="col-12 col-md-12">
                <label for="descripcionFare" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcionFare" name="descripcionFare" rows="2"> Acceso completo al gimnasio</textarea>
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
  <!--/ New Fare modal-->

  <!-- Edit Fare modal-->
  <div class="modal fade" id="editFare" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-fare">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Editar tarifa</h3>
            <p class="text-muted">Completa los datos.</p>
          </div>
          <form id="EditFare" class="row g-3" onsubmit="return false">
            <div class="col-12 col-md-6">
              <label class="form-label" for="editFareName">Nombre de la Tarifa</label>
              <input type="text" id="editFareName" name="editFareName" class="form-control" placeholder="Semanal" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="editFareCost">Costo</label>
              <input type="text" id="editFareCost" name="editFareCost" class="form-control" placeholder="$200" />
            </div>
            <div class="col-12 col-md-12">
                <label for="editDescripcionFare" class="form-label">Descripción:</label>
                <textarea class="form-control" id="editDescripcionFare" name="descripcionFare" rows="2"> Acceso completo al gimnasio</textarea>
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
  <!--/ Edit Fare modal-->

  <!-- Delete Fare Modal -->
  <div class="modal fade" id="deleteFare" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-simple modal-delete-fare">
          <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <div class="text-center mb-4">
                      <h3 class="mb-2">Eliminar Tarifa</h3>
                  </div>
                  <form id="deleteFareForm" class="row g-3" onsubmit="return false">
                      <div class="col-12 text-center">
                          <h4 class="text-center" for="modalDeleteFare">¿Desea eliminar la tarifa seleccionada?</h4>
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
  <!--/ Delete instructor Modal -->
</div>
@endsection