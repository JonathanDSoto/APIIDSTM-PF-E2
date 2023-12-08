<script setup>
import { onMounted, ref, watch } from 'vue';

const props = defineProps({
    keys: {
        type: Object,
        default: {
            id: 'id',
            text: 'name'
        }
    },
    title:{
        type:String,
        required: true
    },
    name: {
        type: String,
        required: true
    },
    inputName:{
        type:String,
        required:true,
    },
    options: {
        type: Array,
        required: true
    },
    selected: {
        type: Array,
        default: []
    }
});

let selectElement;
const selectedOptions = ref();

watch(() => props.selected, () => {
    selectElement.val(props.selected);
    selectElement.trigger('change');
})

onMounted(() => {
    selectElement = $(`#select2-${props.name}`);

    selectElement.on('change', () => {
        const selects = selectElement.select2('data').map(option => +option.id);

        selectedOptions.value = JSON.stringify(selects);
    });
})
</script>

<template>
    <label :for="`select2-${name}`" class="form-label">{{title}}</label>
    <div class="select2-primary">
        <select :id="`select2-${name}`" class="select2 form-select" required multiple>
            <option
                v-for="option in options"
                :value="option[keys.id]"
                :selected="selected.includes(option[keys.id])"
            >
                {{ option[keys.text] }}
            </option>
        </select>
    </div>
    <input type="hidden" :name="inputName" v-model="selectedOptions">
</template>
