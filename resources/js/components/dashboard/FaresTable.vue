<script setup>
const props = defineProps({
    info: {
        type: Object,
        required: true,
    }
});
</script>
<template>
    <div class="col-lg-12 mb-4 mb-lg-0">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title m-0 me-2">Tarifas</h5>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-borderless border-top">
                    <thead class="border-bottom">
                        <tr>
                            <th>Tarifa</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="fare in info">
                            <td>
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="me-3">
                                        <img src="/assets/img/illustrations/page-pricing-basic.png"
                                            alt="Visa" height="45">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-medium">{{fare.name}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <p class="mb-0 fw-medium">{{ fare.payments_made }}</p>
                                    <small class="text-muted text-nowrap">pagados</small>
                                </div>
                            </td>
                            <td><span class="badge bg-label-success">${{fare.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} MXN</span></td>
                            <td>
                                <p class="mb-0 fw-medium">+${{fare.total_earnings.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} MXN</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
