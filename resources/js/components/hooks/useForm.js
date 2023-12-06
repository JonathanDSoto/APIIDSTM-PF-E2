import { ref } from 'vue';

export function useForm() {
    const name = ref('');
    const email = ref('');
    const price = ref(0);
    const phone = ref(0);
    const emergency_phone = ref(0);
    const description = ref('');
    const errors = ref('');

    const showError = () =>{
        alert(errors.value);
    };
    const validateName = () => {
        const nameRegex = /^[A-Za-z\s]+$/;
        const isValid = name.value.trim() !== '' && nameRegex.test(name.value.trim());
        if (!isValid) {
          errors.value = '\nEl nombre solo debe contener letras y espacios';
        }
        return isValid;
      };
    const validatePrice = () => {
        return true;
    }

    return {
        name,
        email,
        price,
        phone,
        emergency_phone,
        description,
        errors,
        validateName,
        validatePrice,
        showError
    };
}
