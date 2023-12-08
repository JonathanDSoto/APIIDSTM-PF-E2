<script setup>
const props = defineProps({
    info: {
        type: Object,
        required: true,
    },
    total_sessions: {
        type: Number,
        required: true,
    }
});
</script>
<template>
    <!-- INSTRUCTORES -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0 me-2">
                    <a :href="route('instructors')" id="employeeList">
                        <h5 class="m-0 me-2">Instructores</h5>
                    </a>
                    <small class="text-muted">Destacados</small>
                </div>
                <div class="dropdown">
                    <a class="btn p-0" :href="route('instructors')" id="employeeList">
                        <i class="ti ti-users ti-sm text-muted"></i>
                    </a>
                </div>
            </div>
            <div class="card-body " style="max-height: 320px; overflow: hidden">
                <ul class="p-0 m-0">
                    <li v-for=" instructor in info" class="d-flex mb-4 pb-1 align-items-center">
                        <img :src="`https://ui-avatars.com/api/?name=${instructor.name}&background=5FBDFF`" height="28" class="me-3 rounded">
                        <div class="d-flex w-100 align-items-center gap-2">
                            <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                <div>
                                    <h6 class="mb-0">
                                        <a class="text-reset fw-bold"
                                            :href="route('instructors.show', { id: instructor.id })">{{
                                                instructor.name }}</a>
                                    </h6>
                                </div>

                                <div class="user-progress d-flex align-items-center gap-2">
                                    <h6 class="mb-0">
                                        {{
                                            Math.round((instructor.assigned_sessions / props.total_sessions) * 100)
                                        }}%
                                    </h6>
                                </div>
                            </div>
                            <div class="chart-progress" data-color="secondary" data-series="85"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
