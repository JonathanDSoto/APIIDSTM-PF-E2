<script setup>
const props = defineProps({
    info: {
        type: Object,
        required: true,
    },
});
</script>
<template>
     <!-- CLIENTES ACTIVOS-->
  <div class="col-xl-3 col-md-4 col-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="badge p-2 bg-label-info mb-2 rounded"><i class="ti ti-users ti-md"></i></div>
        <h5 class="card-title mb-1">Clientes</h5>
        <small class="text-muted">Activos</small>
        <div class="d-flex justify-content-between align-items-center mt-5 gap-3">
          <h4 class="mb-0">{{ props.info.active }} clientes</h4>
          <small class="text-success">
            {{
              Math.round((props.info.active / (props.info.active + props.info.inactive)) * 100)
            }}%
          </small>
        </div>
      </div>
    </div>
  </div>
  <!-- CLIENTES INACTIVOS -->
  <div class="col-xl-3 col-md-4 col-6 mb-4">
    <div class="card h-100">
        <div class="card-body">
            <div class="badge p-2 bg-label-danger mb-2 rounded"><i class="ti ti-users ti-md"></i></div>
            <h5 class="card-title mb-1">Clientes</h5>
            <small class="text-muted">Inactivos </small>
            <div class="d-flex justify-content-between align-items-center mt-5 gap-3">
                <h4 class="mb-0">{{ props.info.inactive }} clientes</h4>
                <small class="text-danger">{{
                    Math.round((props.info.inactive / (props.info.active + props.info.inactive)) * 100)
                  }}%</small>
            </div>
        </div>
    </div>
</div>
</template>
