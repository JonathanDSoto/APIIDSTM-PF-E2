import { ref } from 'vue';
import { useToast } from "vue-toastification";

export function useForm() {
    const name = ref('');
    const email = ref('');
    const price = ref(0);
    const phone = ref(0);
    const emergency_phone = ref(0);
    const description = ref('');
    const errors = ref('');
    const toast = useToast();

    const showError = (text,timeout = 3000, position = "top-right") => {
        toast.error(text, {
            timeout: timeout,
            position: position,
        });
    };
    const showSuccess = (text, timeout = 3000, position = "top-right") => {
        toast.success(text, {
            timeout: timeout,
            position: position,
        });
    }
    const validateName = () => {
        const nameRegex = /^[A-Za-z\s]+$/;
        const isValid = name.value.trim() !== '' && nameRegex.test(name.value.trim());
        if (!isValid) {
            showError('El nombre solo debe contener letras y espacios');
        }
        return isValid;
    };
    const validatePrice = () => {
        const priceRegex = /^\d+(\.\d{1,2})?$/;
        const isPriceValid = price.value.trim() !== '' && priceRegex.test(price.value.trim());
        if (!isPriceValid) {
            showError('El precio solo deben ser números');
        }
        return isPriceValid;
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
