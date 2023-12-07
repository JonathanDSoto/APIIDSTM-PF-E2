<script setup>
import { ref } from "vue";
import FormAuth from "../FormAuth.vue";
const code = ref("");
const isNumber = (e) => {
    let char = String.fromCharCode(e.keyCode);
    if (/^[0-9]+$/.test(char)) return true;
    else e.preventDefault();
};
</script>
<template>
    <div class="card">
        <div class="pb-sm-5 pb-2 rounded-top">
            <div class="container py-5">
                <div class="d-flex flex-column">
                    <h2 class="text-center mb-2">C H E C A D O R</h2>
                    <form method="post">
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="customerPhoneChecker"
                                >Ingrese Tu Codigo</label
                            >
                            <div class="input-group">
                                <input
                                    type="text"
                                    id="customerPhoneChecker"
                                    name="code"
                                    v-model="code"
                                    v-on:keypress="isNumber"
                                    class="form-control phone-number-mask"
                                    required
                                    maxlength="6"
                                    min="0"
                                />
                            </div>
                        </div>
                        <div
                            class="col-12 text-center d-flex justify-content-center"
                        >
                            <div class="form-group d-flex flex-row">
                                <button
                                    type="submit"
                                    class="btn btn-success mt-3 mx-3"
                                    href="javascript:void(0);"
                                    :formaction="route('time_check.store')"
                                >
                                    <FormAuth method="post" />
                                    <i class="ti ti-plus me-1"></i>Marcar Hora
                                    de Llegada
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="d-flex flex-column">
                    <form method="post">
                        <div class="col-12 col-md-12">
                            <input
                                v-model="code"
                                type="number"
                                id="customerPhoneChecker"
                                name="code"
                                class="form-control phone-number-mask"
                                required
                                maxlength="6"
                                min="0"
                                hidden
                            />
                        </div>
                        <div
                            class="col-12 text-center d-flex justify-content-center"
                        >
                            <div class="form-group d-flex flex-row">
                                <button
                                    type="submit"
                                    class="btn btn-danger mt-3 mx-3"
                                    href="javascript:void(0);"
                                    :formaction="route('time_check.update')"
                                >
                                    <FormAuth method="patch" />
                                    <i class="ti ti-plus me-1"></i>Marcar Hora
                                    de Salida
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
