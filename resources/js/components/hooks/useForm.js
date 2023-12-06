import { ref } from 'vue';
import { useToast } from "vue-toastification";

export function useForm() {
    const name = ref('');
    const email = ref('');
    const price = ref(0);
    const phone = ref(0);
    const emergency_phone = ref(0);
    const fare_period_id = ref(0);
    const description = ref('');
    const errors = ref('');
    const toast = useToast();

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
    const validatePhone = () => {
        const phoneRegex = /^\+(?:[0-9] ?){6,14}[0-9]$/;
        const isValid = phoneRegex.test(phone.value);

        if (!isValid) {
            showError('El número de teléfono no cumple con el formato requerido');
        }
        if(phone.value === emergency_phone.value){
            showError('Los números telefonicos deben ser diferentes.');
            return false;
        }

        return isValid;
    }
    function validateEmail() {
        // Expresión regular para validar un correo electrónico
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Verificar si el correo electrónico coincide con la expresión regular
        const isValid = emailRegex.test(email.value);

        if (!isValid) {
            showError('La dirección de correo electrónico no es válida');
        }

        return isValid;
      }

    const showError = (text, timeout = 3000, position = "top-right") => {
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
    return {
        name,
        email,
        price,
        fare_period_id,
        phone,
        emergency_phone,
        description,
        errors,
        validateName,
        validatePrice,
        validatePhone,
        validateEmail,
        showError,
        showSuccess
    };
}
