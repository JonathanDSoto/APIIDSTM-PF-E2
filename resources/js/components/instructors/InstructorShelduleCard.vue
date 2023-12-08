<script setup>
import { ref, inject } from 'vue';
const instructor = ref(inject('instructor'));
</script>
<template>
    <div class="col-12">
        <div class="row" style="height:100%; min-height: 300px;">
            <div class="col-lg-12 col-xl-12">
                <div class="card card-action mb-4" style="height:95%;">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Horarios</h5>
                        <div class="card-action-element">
                            <div>
                                <span>
                                    <i class="ti ti-users ti-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body pb-0">
                            <ul class="timeline ms-1 mb-0">
                                <li v-for="day in instructor.session_days" class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-primary"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header">
                                            <h6 class="mb-0">{{ day.week_day.name }}</h6>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <small class="text-muted">Horario:</small>
                                            <small class="text-muted">{{ day.start_hour }}hrs - {{ day.end_hour
                                            }}hrs</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
