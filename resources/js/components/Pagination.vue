<script setup>
const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
    ruta: {
        type: String,
        required: true,
    },
    params: {
        type: Object,
    }
});
const canGoNext = props.users.to < props.users.total ? true : false;
const canGoPrev = props.users.current_page > 1 ? true : false;
</script>
<template>
    <div class="btn-group mt-2" role="group">
        <a
            v-if="canGoPrev"
            class="btn btn-secondary waves-effect"
            type="button"
            :href="route(props.ruta, { ...params, page: props.users.current_page - 1 })"
            >Anterior</a
        >
        <button v-if="canGoPrev" class="btn btn-outline-secondary">
            {{ props.users.current_page - 1 }}
        </button>
        <button class="btn btn-outline-secondary">
            {{ props.users.current_page }}
        </button>
        <a
            v-if="canGoNext"
            class="btn btn-primary waves-effect"
            :href="route(props.ruta, { ...params, page: props.users.current_page + 1 })"
            >Siguiente</a
        >
    </div>
</template>
