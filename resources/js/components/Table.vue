<script setup>
import DeleteModal from "./DeleteModal.vue";
import { ref } from "vue";
import EditCustomerForm from "./edit_record/EditCustomerForm.vue";
import EditInstructorForm from "./edit_record/EditInstructorForm.vue";

const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
    tipo: {
        type: String,
        required: true,
    },
});
const selectedUserId = ref(0);
const selectedIndex = ref(0);
const returnActiveOrNot = (isActive) => {
    return isActive ? "Activo" : "Inactivo";
};
const editRef = ref(null);
editRef.value = props.tipo === "instructors" ? "#editInstructor" : "#editCustomer";
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
                <tr v-for="(user, index) in props.users" :key="user.id">
                    <td>
                        <a
                            class="text-reset fw-bold"
                            :href="route(`${props.tipo}.show`, { id: user.id })"
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
                    <td class="text-end d-flex">
                        <button
                            @click="selectedIndex = index"
                            data-bs-toggle="modal"
                            :data-bs-target="editRef"
                            style="margin: 5px"
                            class="btn btn-success"
                            href="javascript:void(0);"
                        >
                            <i class="ti ti-pencil me-1"></i>
                        </button>
                        <button
                            @click="selectedUserId = user.id"
                            class="btn btn-danger"
                            style="margin: 5px"
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteUser"
                        >
                            <i class="ti ti-trash me-1"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <EditInstructorForm
            v-if="tipo == 'instructors'"
            :user="users[selectedIndex]"
        />
        <EditCustomerForm
            v-else
            :user="users[selectedIndex]"
        />
        <delete-modal function="delete" :type="tipo" :id="selectedUserId" />
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
