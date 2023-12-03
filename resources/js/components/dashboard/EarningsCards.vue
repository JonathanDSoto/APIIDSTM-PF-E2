import { watchEffect } from 'vue';
<script setup>
const props = defineProps({
    info: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <div class="col-xl-3 col-md-4 col-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="badge p-2 bg-label-success mb-2 rounded"><i class="ti ti-currency-dollar ti-md"></i></div>
                <h5 class="card-title mb-1 pt-2">Ingresos Mensuales</h5>
                <small class="text-muted">(Actual)</small>
                <p class="mb-2 mt-1">${{props.info.currentMonth.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} MXN</p>
                <small class="text-muted">(Pasado)</small>
                <p class="mb-2 mt-1">${{props.info.lastMonth.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} MXN</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-4 col-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="badge p-2 bg-label-success mb-2 rounded"><i class="ti ti-chart-bar ti-md"></i></div>
                <h5 class="card-title mb-1 pt-2">Ingresos Anuales</h5>
                <small class="text-muted">(Actual)</small>
                <p class="mb-2 mt-1">${{props.info.currentYear.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} MXN</p>
                <small class="text-muted">(Pasado)</small>
                <p class="mb-2 mt-1">${{props.info.lastYear.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} MXN</p>
            </div>
        </div>
    </div>
</template>
