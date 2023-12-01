<script setup>
import AssistanceCard from "../AssistanceCard.vue";
import CustomerInfo from "./CustomerInfo.vue";
import PaymentsCard from "../PaymentsCard.vue";
import EditCustomerForm from "../edit_record/EditCustomerForm.vue";
const props = defineProps({
    customer: {
        type: Object,
        required: true,
    },
    blood_groups:{
        type: Object,
        required: true,
    }
});
</script>
<template>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                        <img src="/assets/img/avatars/5.png" alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ props.customer.name }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item d-flex gap-1">
                                        <span class="badge bg-label-warning me-1">
                                            <i class='ti ti-currency-dollar'></i> Pago Pendiente </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-md-2">
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCustomer"
                                    href="javascript:void(0);">
                                    <i class="ti ti-pencil me-1"></i> Editar informacion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-5">
                <CustomerInfo :customer="props.customer" />
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7">
                <div class="row">
                    <!-- ASISTENCIA -->
                    <AssistanceCard :sessions="customer.attended_sessions" />
                    <!--/ ASISTENCIA -->
                    <!-- PAGOS -->
                    <PaymentsCard :payments="customer.payments" />
                </div>
            </div>
        </div>
        <EditCustomerForm :user="props.customer" :blood_groups="props.blood_groups" />
    </div>
</template>

