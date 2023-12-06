<script setup>
import DeleteModal from "../DeleteModal.vue";
import { ref } from "vue";
const props = defineProps({
    types: {
        type: Object,
    },
});

const selectedTypeId = ref(0);
</script>
<template>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre de tipo de pago</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr v-for="type in props.types" :key="type.id">
                    <td>{{ type.name }}</td>
                    <td class="text-end">
                        <a
                            class="btn btn-success me-1"
                            href="javascript:void(0);"
                        >
                            <i class="ti ti-pencil"></i>
                        </a>
                        <a
                            @click="selectedTypeId = type.id"
                            class="btn btn-danger"
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteUser"
                        >
                            <i class="ti ti-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <DeleteModal function="delete" type="payment_types" :id="selectedTypeId" />
</template>
