@extends('layouts.app')
@section('contenido') 

<div class="row">

  <!-- CLIENTES ACTIVOS-->
  <div class="col-xl-3 col-md-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="badge p-2 bg-label-info mb-2 rounded"><i class="ti ti-users ti-md"></i></div>
        <h5 class="card-title mb-0">Clientes</h5>
        <small class="text-muted">Activos</small>
        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
          <h4 class="mb-0">75 clientes</h4>
          <small class="text-danger">75%</small>
        </div>
      </div>
    </div>
  </div>

  <!-- CLIENTES INACTIVOS -->
  <div class="col-xl-3 col-md-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="badge p-2 bg-label-danger mb-2 rounded"><i class="ti ti-users ti-md"></i></div>
        <h5 class="card-title mb-0">Clientes</h5>
        <small class="text-muted">Inactivos </small>
        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
          <h4 class="mb-0">15 clientes</h4>
          <small class="text-success">15%</small>
        </div>
      </div>
    </div>
  </div>

  <!-- INGRESOS MENSUALES-->
  <div class="col-xl-3 col-md-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="badge p-2 bg-label-success mb-2 rounded"><i class="ti ti-currency-dollar ti-md"></i></div>
        <h5 class="card-title mb-1 pt-2">Ingresos Mensuales</h5>
        <small class="text-muted">Mensual</small>
        <p class="mb-2 mt-1">$1.28k</p>
      </div>
    </div>
  </div>

  <!-- INGRESOS ANUALES -->
  <div class="col-xl-3 col-md-4 col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="badge p-2 bg-label-success mb-2 rounded"><i class="ti ti-chart-bar ti-md"></i></div>
        <h5 class="card-title mb-1 pt-2">Ingresos Anuales</h5>
        <small class="text-muted">Anual</small>
        <p class="mb-2 mt-1">$4,673</p>
      </div>
    </div>
  </div>

  <!-- INSTRUCTORES -->
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title m-0 me-2">
          <h5 class="m-0 me-2">Instructores</h5>
          <small class="text-muted">Destacados</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="employeeList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-users ti-sm text-muted"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/avatars/5.png" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">James Smith</h6>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">80.4%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="secondary" data-series="85"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/avatars/8.png"  height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Robert Williams</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">10.6%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="success" data-series="70"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/avatars/7.png" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Michael Jones</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">5.5%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="primary" data-series="25"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/avatars/6.png"  height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Richard Miller</h6>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">2.0%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="danger" data-series="75"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/avatars/2.png" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Christopher Anderson</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">1.5%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="info" data-series="60"></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
    <!-- CLASES -->
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title m-0 me-2">
          <h5 class="m-0 me-2">Clases</h5>
          <small class="text-muted">Destacadas</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="employeeList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-users ti-sm text-muted"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/favicon/ejercicio.png" alt="Chrome" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Entrenamiento Funcional</h6>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">70.4%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="secondary" data-series="85"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
          <img src="../../assets/img/favicon/ejercicio.png" alt="Chrome" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Spinning</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">20.6%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="success" data-series="70"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
          <img src="../../assets/img/favicon/ejercicio.png" alt="Chrome" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Yoga</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">5.3%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="primary" data-series="25"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
          <img src="../../assets/img/favicon/ejercicio.png" alt="Chrome" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Pilates</h6>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">3.1%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="danger" data-series="75"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
          <img src="../../assets/img/favicon/ejercicio.png" alt="Chrome" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Boxeo</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">1.2%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="info" data-series="60"></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- PAGOS TOTALES -->
  <div class="col-lg-12 mb-4 mb-lg-0">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <h5 class="card-title m-0 me-2">Tarifas </h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-borderless border-top">
          <thead class="border-bottom">
            <tr>
              <th>Tarifa</th>
              <th>Clientes</th>
              <th>Pago</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="me-3">
                    <img src="../../assets/img/illustrations/page-pricing-basic.png" alt="Visa" height="45">
                  </div>
                  <div class="d-flex flex-column">
                    <p class="mb-0 fw-medium">Dia</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <p class="mb-0 fw-medium">12</p>
                  <small class="text-muted text-nowrap">clientes</small>
                </div>
              </td>
              <td><span class="badge bg-label-success">$50.00</span></td>
              <td>
                <p class="mb-0 fw-medium">+$600.00</p>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="me-3">
                    <img src="../../assets/img/illustrations/page-pricing-basic.png" alt="Visa" height="45">
                  </div>
                  <div class="d-flex flex-column">
                    <p class="mb-0 fw-medium">Mensual</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <p class="mb-0 fw-medium">70</p>
                  <small class="text-muted text-nowrap">clientes</small>
                </div>
              </td>
              <td><span class="badge bg-label-success">$450.00</span></td>
              <td>
                <p class="mb-0 fw-medium">+$31,500.00</p>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="me-3">
                    <img src="../../assets/img/illustrations/page-pricing-basic.png" alt="Visa" height="45">
                  </div>
                  <div class="d-flex flex-column">
                    <p class="mb-0 fw-medium">Anual</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <p class="mb-0 fw-medium">18</p>
                  <small class="text-muted text-nowrap">clientes</small>
                </div>
              </td>
              <td><span class="badge bg-label-success">$3000.00</span></td>
              <td>
                <p class="mb-0 fw-medium">+$54,000.00</p>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection