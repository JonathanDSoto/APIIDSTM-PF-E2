<script setup>
import { ref, inject } from 'vue';
const sessionInfo = ref(inject('session'));
const sessionDays = ref(sessionInfo.value);
sessionDays.value = sessionDays.value.session_days;
</script>
<template>
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="row" style="height:100%; min-height: 300px;">
            <div class="col-lg-12 col-xl-12">
                <div class="card card-action mb-4" style="height:95%;">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Horarios</h5>
                        <div class="card-action-element">
                            <div>
                                <span>
                                    <i class="ti ti-calendar ti-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="card-body pb-0">
                            <ul class="timeline ms-1 mb-0">
                                <li v-for="day in sessionDays" class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-primary"></span>
                                    <div class="timeline-event">
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addCustomerRegister">
                                        <div class="timeline-header">
                                            <h6 class="mb-0">{{ day.week_day.name }}</h6>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <small class="text-muted">Horario:</small>
                                            <small class="text-muted">{{ day.start_hour }}hrs - {{ day.end_hour
                                            }}hrs</small>
                                        </div>
                                    </button>
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
<style>
.btns:link,
.btns:visited {
    text-transform: uppercase;
    text-decoration: none;
    padding: 15px 40px;
    display: inline-block;
    border-radius: 100px;
    transition: all .2s;
}
.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.btn-white {
    background-color: #f0f0f0;
    color: #bbbbbb;
}

.btn::after {
    content: "";
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .4s;
}

.btn-white::after {
    background-color:#f0f0f0;
}

.btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

.btn-animated {
    animation: moveInBottom 5s ease-out;
    animation-fill-mode: backwards;
}

@keyframes moveInBottom {
    0% {
        opacity: 0;
        transform: translateY(25px);
    }

    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
</style>
