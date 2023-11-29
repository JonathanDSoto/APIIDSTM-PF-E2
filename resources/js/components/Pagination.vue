<script setup>
const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
});

const canGoNext = props.users.to < props.users.total ? true : false;
const canGoPrev = props.users.current_page > 1 ? true : false;
console.log(props.users);
</script>
<template>
    <div class="btn-group mt-2" role="group">
        <a
            v-if="canGoPrev"
            class="btn btn-secondary waves-effect"
            type="button"
            :href="route('customers', { page: props.users.current_page - 1 })"
            >Prev</a
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
            :href="route('customers', { page: props.users.current_page + 1 })"
            >Next</a
        >
    </div>
</template>
