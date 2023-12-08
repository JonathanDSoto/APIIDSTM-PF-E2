<script setup>
import { provide, ref, watchEffect } from 'vue';
import Pagination from '../Pagination.vue';
import DeleteModal from '../DeleteModal.vue';
const props = defineProps({
    sessions: {
        type: Object,
        required: true,
    }
});
const selectedId = ref(0);
provide('sessions', props.sessions.data);
</script>
<template>
    <div class="row my-3">
        <h4 class="col-9">
            <span class="text-muted fw-light">Clases /</span> Clases Disponibles
        </h4>
        <div class="col-3 text-end">
            <a type="button" class="btn btn-primary mt-3" :href="route('sessions.create')">
                <i class="ti ti-plus me-1"></i> Añadir Clase
            </a>
        </div>
    </div>
    <div class="row">
        <SessionCard v-for="(session) in sessions.data" @set-id="(i) => {selectedId = i}"
            :session="session" :id="session.id" />
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-start align-items-center">
            <Pagination :users="sessions" ruta="sessions" />
        </div>
    </div>
    <DeleteModal :id="selectedId" type="sessions" function="delete" />
</template>
