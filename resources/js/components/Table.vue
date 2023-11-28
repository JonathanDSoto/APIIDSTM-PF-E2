<script setup>
import DeleteModal from './DeleteModal.vue';
import { ref } from 'vue';
import EditCustomerForm from './EditCustomerForm.vue';


const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
    // 1 - For Instructors, 0 - For Clients
    tipo: {
        type: Boolean,
        required: true,
    },
    blood_groups: {
        type: Object,
        required: true,
    }
});
const selectedUserId = ref(0);
const selectedIndex = ref(0);
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
                <tr v-for="(user,index) in props.users" :key="user.id">
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
                            <button @click="selectedIndex = index;" data-bs-toggle="modal" :data-bs-target="(props.tipo) ?'#editInstructor':'#editCustomer'" style="margin: 5px" class="btn btn-success" href="javascript:void(0);">
                                <i class="ti ti-pencil me-1"></i>
                            </button>
                        <button @click="selectedUserId = user.id;" class="btn btn-danger" style="margin: 5px;" href="javascript:void(0);"
                            data-bs-toggle="modal" data-bs-target="#deleteUser">
                            <i class="ti ti-trash me-1"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <edit-customer-form  :user="users[selectedIndex]" :blood_groups="props.blood_groups" />
        <delete-modal :type="props.tipo" :idUser="selectedUserId" />
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
