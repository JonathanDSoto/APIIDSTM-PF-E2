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
        <div class="pt-1">
          <span class="badge bg-label-secondary">+8.2%</span>
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
        <div class="pt-1">
          <span class="badge bg-label-secondary">-5.2%</span>
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
        <div class="pt-1">
          <span class="badge bg-label-secondary">+12.2%</span>
        </div>
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
        <div class="pt-1">
          <span class="badge bg-label-secondary">+25.2%</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Revenue Growth -->
  <!-- <div class="col-xl-4 col-md-8 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex flex-column">
            <div class="card-title mb-auto">
              <h5 class="mb-1 text-nowrap">Revenue Growth</h5>
              <small>Weekly Report</small>
            </div>
            <div class="chart-statistics">
              <h3 class="card-title mb-1">$4,673</h3>
              <span class="badge bg-label-success">+15.2%</span>
            </div>
          </div>
          <div id="revenueGrowth"></div>
        </div>
      </div>
    </div>
  </div> -->
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
            <img src="../../assets/img/icons/brands/chrome.png" alt="Chrome" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Google Chrome</h6>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">90.4%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="secondary" data-series="85"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/icons/brands/safari.png" alt="Safari" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Apple Safari</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">70.6%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="success" data-series="70"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/icons/brands/firefox.png" alt="Firefox" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Mozilla Firefox</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">35.5%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="primary" data-series="25"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/icons/brands/opera.png" alt="Opera" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Opera Mini</h6>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">80.0%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="danger" data-series="75"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/icons/brands/edge.png" alt="Edge" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Internet Explorer</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">62.2%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="info" data-series="60"></div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <img src="../../assets/img/icons/brands/brave.png" alt="Brave" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Brave</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">46.3%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="warning" data-series="45"></div>
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
            <img src="../../assets/img/icons/brands/chrome.png" alt="Chrome" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Google Chrome</h6>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">90.4%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="secondary" data-series="85"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/icons/brands/safari.png" alt="Safari" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Apple Safari</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">70.6%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="success" data-series="70"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/icons/brands/firefox.png" alt="Firefox" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Mozilla Firefox</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">35.5%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="primary" data-series="25"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/icons/brands/opera.png" alt="Opera" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Opera Mini</h6>
                </div>

                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">80.0%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="danger" data-series="75"></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <img src="../../assets/img/icons/brands/edge.png" alt="Edge" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Internet Explorer</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">62.2%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="info" data-series="60"></div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <img src="../../assets/img/icons/brands/brave.png" alt="Brave" height="28" class="me-3 rounded">
            <div class="d-flex w-100 align-items-center gap-2">
              <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                <div>
                  <h6 class="mb-0">Brave</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-2">
                  <h6 class="mb-0">46.3%</h6>
                </div>
              </div>
              <div class="chart-progress" data-color="warning" data-series="45"></div>
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
                    <!-- <img src="../../assets/img/icons/payments/visa-img.png" alt="Visa" height="30"> -->
                  </div>
                  <div class="d-flex flex-column">
                    <p class="mb-0 fw-medium">Dia</p><small class="text-muted">Prueba</small>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <p class="mb-0 fw-medium">8</p>
                  <small class="text-muted text-nowrap">clientes</small>
                </div>
              </td>
              <td><span class="badge bg-label-success">$0.00</span></td>
              <td>
                <p class="mb-0 fw-medium">+$0.00</p>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="me-3">
                    <!-- <img src="../../assets/img/icons/payments/visa-img.png" alt="Visa" height="30"> -->
                  </div>
                  <div class="d-flex flex-column">
                    <p class="mb-0 fw-medium">Dia</p><small class="text-muted">normal</small>
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
                    <!-- <img src="../../assets/img/icons/payments/visa-img.png" alt="Visa" height="30"> -->
                  </div>
                  <div class="d-flex flex-column">
                    <p class="mb-0 fw-medium">Mensual</p><small class="text-muted">xxxxxx</small>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <p class="mb-0 fw-medium">50</p>
                  <small class="text-muted text-nowrap">clientes</small>
                </div>
              </td>
              <td><span class="badge bg-label-success">$0.00</span></td>
              <td>
                <p class="mb-0 fw-medium">+$0.00</p>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="me-3">
                    <!-- <img src="../../assets/img/icons/payments/visa-img.png" alt="Visa" height="30"> -->
                  </div>
                  <div class="d-flex flex-column">
                    <p class="mb-0 fw-medium">Dia</p><small class="text-muted">Prueba</small>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <p class="mb-0 fw-medium">20</p>
                  <small class="text-muted text-nowrap">clientes</small>
                </div>
              </td>
              <td><span class="badge bg-label-success">$0.00</span></td>
              <td>
                <p class="mb-0 fw-medium">+$0.00</p>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection