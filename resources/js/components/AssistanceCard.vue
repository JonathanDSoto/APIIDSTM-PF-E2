<script setup>
const props = defineProps({
    sessions: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <div class="col-lg-12 col-xl-6">
        <div
            class="card card-action mb-4"
            style="max-height: 500px; overflow: auto"
        >
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Asistencias</h5>
                <div class="card-action-element">
                    <div>
                        <span>
                            <i class="ti ti-calendar ti-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body pb-0">
                    <ul class="timeline ms-1 mb-0">
                        <li
                            v-for="session in props.sessions"
                            class="timeline-item timeline-item-transparent"
                        >
                            <span
                                class="timeline-point timeline-point-primary"
                            ></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">
                                        {{ session.week_day.name }}
                                    </h6>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <small class="text-muted"
                                        >Horario: {{ session.start_hour }}hrs -
                                        {{ session.end_hour }}hrs</small
                                    >
                                </div>
                            </div>
                        </li>
                        <!-- <li class="text-center">
                            <a href="javascript:;">Ver Mas</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
