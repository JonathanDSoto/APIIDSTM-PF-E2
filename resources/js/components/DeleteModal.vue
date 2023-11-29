<script setup>
import FormAuth from "./FormAuth.vue";
const props = defineProps({
    /* Instructor -> true - Cliente -> false */
    idUser: {
        type: Number,
        required: true,
    },
    type: {
        type: String,
        required: true,
    },
});

</script>

<template>
    <form method="POST" id="deleteUserForm"
        :action="route(`${props.type}.delete`, { id: props.idUser })">
        <FormAuth method="delete" />
        <div class="modal fade" id="deleteUser" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Eliminar {{ (props.type) ? 'instructor' : 'cliente' }}</h3>
                            <p class="text-muted">
                                ¿Estas Seguro que deseas eliminar al {{ (props.type) ? 'instructor' : 'cliente' }}?
                            </p>
                        </div>
                        <!-- <form id="deleteUserForm" class="row g-3" :action="route('customers.delete', { id: props.id })
                            " method="POST">
                            <FormAuth method="POST" /> -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                Confirmo
                            </button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>
