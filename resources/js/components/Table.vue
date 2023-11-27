<script setup>
import FormAuth from "./FormAuth.vue";

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
const returnActiveOrNot = (isActive) => {
    return isActive ? "Activo" : "Inactivo";
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
                        <a class="text-reset fw-bold" :href="route((props.tipo) ? 'instructors.show' : 'customers.show', {
                            id: user.id,
                        })
                            ">{{ user.name }}</a>

                    </td>
                    <td>{{ user.phone }}</td>
                    <td>
                        <span v-if="user.is_active" class="badge bg-label-success me-1">{{ returnActiveOrNot(user.is_active)
                        }}</span>
                        <span v-else class="badge bg-label-danger me-1">{{
                            returnActiveOrNot(user.is_active)
                        }}</span>
                    </td>
                    <td class="text-end d-flex">
                        <!--  ToDo: <form :action="route((props.tipo) ? 'instructors.update' : 'customers.update', { id: user.id })" method="post"></form> -->
                        <form action="" method="post">
                            <button style="margin: 5px" class="btn btn-success" href="javascript:void(0);">
                                <i class="ti ti-pencil me-1"></i>
                            </button>
                        </form>
                        <form method="POST" :action="route((props.tipo) ? 'instructors.delete' : 'customers.delete', { id: user.id })">
                            <FormAuth method="delete" />
                            <button class="btn btn-danger" style="margin: 5px" href="javascript:void(0);">
                                <i class="ti ti-trash me-1"></i>
                            </button>
                        </form>
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
