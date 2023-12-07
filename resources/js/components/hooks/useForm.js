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
        console.log(price.value);
        if (price.value == 0 || price.value == '0') {
            showError('El campo del precio no puede ser cero');
            return false;
        }
        if (!priceRegex.test(price.value)) {
            showError('El precio solo debe contener números');
            return false;
        }
        if (price.value === '' || price.value.trim() === '') {
            showError('El campo del precio no debe estar vacío');
            return false;
        }
        return true;
    };

    const validatePhone = () => {
        const phoneRegex = /^\d{10}$/;
        const isValid = phoneRegex.test(phone.value);

        if (!isValid) {
            showError('El número de teléfono no cumple con el formato requerido');
        }
        if (phone.value === emergency_phone.value) {
            showError('Los números telefonicos deben ser diferentes.');
            return false;
        }

        return isValid;
    }
    const validateEmergencyPhone = () => {
        const phoneRegex = /^\d{10}$/;
        const isValid = phoneRegex.test(emergency_phone.value);

        if (!isValid) {
            showError('El teléfono de emergencia no cumple con el formato requerido');
        }
        if (emergency_phone.value === phone.value) {
            showError('Los números telefonicos deben ser diferentes.');
            return false;
        }

        return isValid;
    }
    const validateEmail = () => {
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
        validateEmergencyPhone,
        showError,
        showSuccess
    };
}
