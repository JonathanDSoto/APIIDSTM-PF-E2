<script setup>
const props = defineProps({
    session: {
        type: Object,
        required: true,
    },
    id:{
        type:Number,
        required:true,
    },
});
</script>
<template>
    <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="card position-relative h-100">
            <div class="card-body text-center d-flex flex-column justify-content-between">
                <div>
                    <a :href="route('sessions.show',{id:props.session.id})">
                        <i class="mb-3 fas fa-dumbbell ti-lg"></i>
                    </a>
                    <h5>{{props.session.name}}</h5>
                    <p style="text-align: justify;">{{props.session.description}}</p>
                </div>
                <div>
                    <div class="d-flex flex-column justify-content-between align-items-center mt-3 gap-3">
                        <small>Capacidad: {{ props.session.max_capacity }} personas</small>
                        <small>Ejercicio: {{props.session.exercise_type.name}}</small>
                    </div>
                    <div  class="d-flex justify-content-evenly align-items-end">
                        <a type="button" class="btn btn-success mt-3"  :href="route('sessions.edit',{id:props.session.id})">
                            <i class="ti ti-pencil"></i>
                        </a>
                        <a type="button" class="btn btn-danger mt-3" @click="this.$emit('set-id',id)" data-bs-toggle="modal" data-bs-target="#deleteUser" href="javascript:void(0);">
                            <i class="ti ti-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
