@extends('layouts.app') 
@section('contenido')

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class=" mb-2">Modales</h4>
  <div class="row mb-3">
    <!--  New customer -->
    <div class="col-12 col-sm-6 col-lg-4 mb-4">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-3 ti ti-user ti-lg"></i>
          <h5>Añadir Cliente</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCustomer"> Añadir </button>
        </div>
      </div>
    </div>
    <!--/  New customer -->

    <!--  Edit customer -->
    <div class="col-12 col-sm-6 col-lg-4 mb-4">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-3 ti ti-user ti-lg"></i>
          <h5>Editar Cliente</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCustomer"> Editar </button>
        </div>
      </div>
    </div>
    <!--/  Edit customer -->

    <!--  Delete customer -->
    <div class="col-12 col-sm-6 col-lg-4 mb-4">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-3 ti ti-user ti-lg"></i>
          <h5>Eliminar Cliente</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteCustomer"> Eliminar </button>
        </div>
      </div>
    </div>
    <!--/  Delete customer -->

    <!-- PAYMENT CUSTOMER -->
    <div class="col-12 col-sm-6 col-lg-4 mb-4">
      <div class="card">
        <div class="card-body text-center">
          <i class="mb-3 ti ti-user ti-lg"></i>
          <h5>Pago de Cliente</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentCustomer"> Eliminar </button>
        </div>
      </div>
    </div>
    <!--/  PAYMENT CUSTOMER  -->
  </div>

  <!-- VISTA POR MODAL -->

  <!-- New customer Modal -->
  <div class="modal fade" id="newCustomer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-new-customer">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Añadir Cliente</h3>
            <p class="text-muted">Ingresa todos los datos.</p>
          </div>
          <form id="newCustomerForm" class="row g-3" onsubmit="return false">
            <div class="col-12 col-md-6">
              <label class="form-label" for="newCustomerFirstName">Nombre(s)</label>
              <input type="text" id="newCustomerFirstName" name="newCustomerFirstName" class="form-control" placeholder="Albert" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="newCustomerLastName">Apellidos</label>
              <input type="text" id="newCustomerLastName" name="newCustomerLastName" class="form-control" placeholder="Cook" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="newCustomerEmail">Email</label>
              <input type="text" id="newCustomerEmail" name="newCustomerEmail" class="form-control" placeholder="albert@gmail.com" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="newCustomerStatus">Status</label>
              <select id="newCustomerStatus" name="newCustomerStatus" class="select2 form-select" aria-label="Default select example">
                <option selected>Status</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
                <option value="3">Suspendido</option>
              </select>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="newCustomerPhone">Numero de Celular</label>
              <div class="input-group">
                <span class="input-group-text">MX (+52)</span>
                <input type="text" id="newCustomerPhone" name="newCustomerPhone" class="form-control phone-number-mask" placeholder="(612) 000 000 0" />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="newCustomerPhoneEmergency">Numero Emergencia</label>
              <div class="input-group">
                <span class="input-group-text">MX (+52)</span>
                <input type="text" id="newCustomerPhoneEmergency" name="newCustomerPhoneEmergency" class="form-control phone-number-mask" placeholder="(612) 000 000 0" />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="newCustomerFare">Tarifa</label>
              <select id="newCustomerFare" name="newCustomerFare" class="select2 form-select" aria-label="Default select example">
                <option selected>Tarifa</option>
                <option value="diario" selected>Diaria</option>
                <option value="mensual">Mensual</option>
                <option value="anual">Anual</option>
              </select>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="newCustomerBlood">Tipo de sangre</label>
              <select id="newCustomerBlood" name="newCustomerBlood" class="select2 form-select" aria-label="Default select example">
                <option selected>Tipo sangre</option>
                <option value="diario">A+</option>
                <option value="mensual">A-</option>
                <option value="anual">B+</option>
                <option value="diario">B-</option>
                <option value="mensual">AB+</option>
                <option value="anual">AB-</option>
                <option value="diario">O+</option>
                <option value="mensual">O-</option>
              </select>
            </div>
            <div class="col-12">
              <label class="switch">
                <input type="checkbox" class="switch-input">
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Entrenador Personal</span>
              </label>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar</button>
              <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/ New customer Modal -->

  <!-- Edit customer Modal -->
  <div class="modal fade" id="editCustomer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Editar Informacion de Cliente</h3>
            <p class="text-muted">Actualiza los datos permitidos.</p>
          </div>
          <form id="editCustomerForm" class="row g-3" onsubmit="return false">
            <div class="col-12 col-md-6">
              <label class="form-label" for="editCustomerFirstName">Nombre(s)</label>
              <input type="text" id="editCustomerFirstName" name="editCustomerFirstName" class="form-control" placeholder="Albert" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="editCustomerLastName">Apellidos</label>
              <input type="text" id="editCustomerLastName" name="editCustomerLastName" class="form-control" placeholder="Cook" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="editCustomerEmail">Email</label>
              <input type="text" id="editCustomerEmail" name="editCustomerEmail" class="form-control" placeholder="albert@gmail.com" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="editCustomerStatus">Status</label>
              <select id="editCustomerStatus" name="editCustomerStatus" class="select2 form-select" aria-label="Default select example">
                <option value="1" selected>Activo</option>
                <option value="2">Inactivo</option>
                <option value="3">Suspendido</option>
              </select>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="editCustomerPhone">Numero de Celular</label>
              <div class="input-group">
                <span class="input-group-text">MX (+52)</span>
                <input type="text" id="editCustomerPhone" name="editCustomerPhone" class="form-control phone-number-mask" placeholder="(612) 123 123 0" />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="editCustomerPhoneEmergency">Numero Emergencia</label>
              <div class="input-group">
                <span class="input-group-text">MX (+52)</span>
                <input type="text" id="editCustomerPhoneEmergency" name="editCustomerPhoneEmergency" class="form-control phone-number-mask" placeholder="(612) 123 123 9" />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="editCustomerFare">Tarifa</label>
              <select id="editCustomerFare" name="editCustomerFare" class="select2 form-select" aria-label="Default select example">
                <option selected>Tarifa</option>
                <option value="diario" selected>Diaria</option>
                <option value="mensual">Mensual</option>
                <option value="anual">Anual</option>
              </select>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="editCustomerBlood">Tipo de sangre</label>
              <select id="editCustomerBlood" name="editCustomerBlood" class="select2 form-select" aria-label="Default select example">
                <option value="diario">A+</option>
                <option value="mensual">A-</option>
                <option value="anual">B+</option>
                <option value="diario">B-</option>
                <option value="mensual">AB+</option>
                <option value="anual">AB-</option>
                <option value="diario" selected>O+</option>
                <option value="mensual">O-</option>
              </select>
            </div>
            <div class="col-12">
              <label class="switch">
                <input type="checkbox" class="switch-input">
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Entrenador Personal</span>
              </label>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar</button>
              <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/ Edit customer Modal -->

  <!-- Delete customer Modal -->
  <div class="modal fade" id="deleteCustomer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-delete-customer">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Eliminar Cliente</h3>
          </div>
          <form id="deleteCustomerForm" class="row g-3" onsubmit="return false">
            <div class="col-12 text-center">
              <h4 class="text-center" for="modalDeleteCustomerFirstName">¿Desea eliminar el cliente seleccionado?</h4>
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
  <!--/ Delete customer Modal -->

  <!-- Payment customer modal-->
  <div class="modal fade" id="paymentCustomer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-new-customer">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Pagar tarifa de Cliente</h3>
            <p class="text-muted">Completa los datos.</p>
          </div>
          <form id="paymentCustomer" class="row g-3" onsubmit="return false">
            <div class="col-12 col-md-6">
              <label class="form-label" for="payCustomerName">Nombre Completo</label>
              <input type="text" id="payCustomerName" name="payCustomerName" class="form-control" placeholder="Albert Cook" />
            </div>

            <div class="col-12 col-md-6">
              <label class="form-label" for="payCustomerFare">Tarifa</label>
              <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select" aria-label="Default select example">
                <option selected>Tarifa</option>
                <option value="diario" selected>Diaria $50.00 </option>
                <option value="mensual">Mensual $450.00 </option>
                <option value="anual">Anual $3000.00 </option>
              </select>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="payCustomerFareDays">Cantidad de Dias, Meses, Años</label>
              <input type="text" id="payCustomerFareDays" name="payCustomerFareDays" class="form-control" placeholder="4" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="payCustomerAmount">Monto a pagar</label>
              <input type="text" id="payCustomerAmount" name="payCustomerAmount" class="form-control" placeholder="$200" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="payCustomerFare">Tipo de pago</label>
              <select id="payCustomerFare" name="payCustomerFare" class="select2 form-select" aria-label="Default select example">
                <option value="efectivo" selected>Efectivo</option>
                <option value="tarjeta">Tarjeta </option>
                <option value="tranferencia">Transferencia</option>
              </select>
            </div>
            <div class="col-12 col-md-6">
              <label for="dobBasic" class="form-label">Fecha de Pago</label>
              <input type="date" id="dobBasic" class="form-control">
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Pagar</button>
              <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/ Payment customer modal-->
</div>
@endsection