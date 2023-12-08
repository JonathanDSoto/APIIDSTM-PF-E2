<script setup>
import { provide, ref } from 'vue';
import InformationCard from "./InformationCard.vue";
import SheduleCard from './SheduleCard.vue';
import AddSubscriptionRecord from '../add_record/AddSubscriptionRecord.vue';
const props = defineProps({
    session: {
        type: Object,
        required: true,
    },
    customers: {
        type: Object,
        required: true,
    }
});
provide('session', props.session);
provide('customers', props.customers);
const sessionVals = ref({ id: 0, name: "",  });
</script>
<template>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto text-center">
                        <img src="/assets/img/favicon/ejercicio.png" alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ props.session.name }}</h4>
                                <p>{{ props.session.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INFORMACION -->
    <div class="row">
        <InformationCard />
        <!-- ASISTENCIAS -->
        <SheduleCard @session-info="(emit) => sessionVals = { id: emit.id, name: emit.name }" />
    </div>
    <AddSubscriptionRecord :name="sessionVals.name" :id="sessionVals.id" />
    <!--/ ASISTENCIAS -->
</template>
