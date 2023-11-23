<script setup>
const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
    // 1 - For Instructors, 2 - For Clients
    tipo: {
        type: Boolean,
        required: true,
    },
});
const returnActiveOrNot = (lol) => {
    return lol ? "Activo" : "Inactivo";
};
</script>
<template>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Estatus</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr v-for="user in props.users" :key="user.id">
                    <td>
                        <a
                            class="text-reset fw-bold"
                            :href="
                                route('instructors.show', {
                                    id: user.id,
                                })
                            "
                            >{{ user.name }}</a
                        >
                    </td>
                    <td>{{ user.phone }}</td>
                    <td>
                        <span
                            v-if="user.is_active"
                            class="badge bg-label-success me-1"
                            >{{ returnActiveOrNot(user.is_active) }}</span
                        >
                        <span v-else class="badge bg-label-danger me-1">{{
                            returnActiveOrNot(user.is_active)
                        }}</span>
                    </td>
                    <td class="text-end">
                        <a
                            style="margin-right: 10px"
                            class="btn btn-success"
                            href="javascript:void(0);"
                        >
                            <i class="ti ti-pencil me-1"></i>
                        </a>
                        <a class="btn btn-danger" href="javascript:void(0);">
                            <i class="ti ti-trash me-1"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<style scoped>
.responsive-text {
    word-wrap: break-word;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 100%;
}
</style>
