<script setup>
import FormAuth from "./FormAuth.vue";
const props = defineProps({
    /* Instructor -> true - Cliente -> false */
    id: {
        type: Number,
        required: true,
    },
    type: {
        type: String,
        required: true,
    },
    function: {
        type: String,
        required: true,
    }
});
const getTranslation = (type) => {
    switch (type) {
        case "customers":
            return "al cliente";
        case "instructors":
            return "al instructor";
        case "fares":
            return "la tarifa";
        case "payments":
            return "el pago";
        default:
            return "";
    }
};
</script>
<template>
    <form
        method="POST"
        id="deleteUserForm"
        :action="route(`${props.type}.${props.function}`, { id: props.id })"
    >
        <FormAuth method="patch" />
        <div
            class="modal fade"
            id="cancelPayment"
            tabindex="-1"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-dialog-centered modal-lg modal-simple modal-edit-user"
            >
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">
                                Cancelar
                                {{ getTranslation(props.type) }}
                            </h3>
                            <p class="text-muted">
                                ¿Estás seguro que deseas cancelar
                                {{ getTranslation(props.type) }}?
                            </p>
                        </div>
                        <div class="col-12 text-center">
                            <button
                                type="submit"
                                class="btn btn-danger me-sm-3 me-1"
                            >
                                Confirmar
                            </button>
                            <button
                                type="reset"
                                class="btn btn-label-secondary"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            >
                                Cancelar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>
