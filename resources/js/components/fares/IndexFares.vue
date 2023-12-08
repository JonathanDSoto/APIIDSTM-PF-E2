<script setup>
import { provide, ref } from "vue";
import EditFareForm from "../edit_record/EditFareForm.vue";
import AddFareRecord from "../add_record/AddFareRecord.vue";
import DeleteModal from "../DeleteModal.vue";

const props = defineProps({
    fares: {
        type: Object,
        required: true,
    },
    fare_periods: {
        type: Object,
        required: true,
    },
    fares_count: {
        type: Object,
    },
});

provide("fare_periods", props.fare_periods);

const keyFareCount = Object.keys(props.fares_count)[0];

const selectedId = ref(0);
const selectedIndex = ref(0);

const returnFareName = (id) => {
    const found = props.fare_periods.find((element) => element.id == id);
    return found.name;
};
</script>
<template>
    <AddFareRecord />
    <div class="card">
        <div class="pb-sm-5 pb-2 rounded-top">
            <div class="container py-5">
                <div class="d-flex flex-column align-items-center">
                    <h2 class="text-center mb-2 mt-0 mt-md-4 me-0 fs-4">
                        Tarifas de GymExpert
                    </h2>
                    <div class="ms-auto mb-3 me-5">
                        <a
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            href="javascript:void(0);"
                            data-bs-target="#addFare"
                        >
                            <i class="ti ti-plus me-1"></i> Añadir Tarifa
                        </a>
                    </div>
                </div>
                <div class="row mx-0 gy-3 px-lg-5">
                    <!-- FARE -->
                    <div
                        class="col-lg mb-md-0 mb-4"
                        v-for="(fare, index) in props.fares"
                        :key="fare.id"
                    >
                        <div class="card border rounded shadow-none">
                            <div class="card-body">
                                <span
                                    v-if="keyFareCount == fare.id"
                                    class="position-absolute top-0 end-0 m-3 badge bg-label-primary"
                                    >Mas popular</span
                                >
                                <h3
                                    class="card-title text-center text-capitalize mb-1 fs-5"
                                >
                                    {{ fare.name }}
                                </h3>
                                <p class="text-center fs-6"></p>
                                <div class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <sup
                                            class="h6 pricing-currency mt-3 mb-0 me-1 text-primary"
                                            >$</sup
                                        >
                                        <h1
                                            class="display-4 mb-0 text-primary fs-2"
                                        >
                                            {{ fare.price }}
                                        </h1>
                                    </div>
                                    <span class="fw-bold">{{ returnFareName(fare.fare_period_id) }}</span>
                                </div>

                                <div class="text-center m-2">
                                    {{ fare.description }}
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button
                                        class="btn btn-success mx-3"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editFare"
                                        href="javascript:void(0);"
                                        @click="selectedIndex = index"
                                    >
                                        <i class="ti ti-pencil"></i>
                                    </button>
                                    <button
                                        @click="selectedId = fare.id"
                                        class="btn btn-danger mx-3"
                                        href="javascript:void(0);"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteUser"
                                    >
                                        <i class="ti ti-trash me-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <EditFareForm :fare="props.fares[selectedIndex]" />
                    <DeleteModal
                        function="delete"
                        type="fares"
                        :id="selectedId"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
