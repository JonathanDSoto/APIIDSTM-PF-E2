import { ref } from 'vue';
import { useAlerts } from './useAlerts';

export function useForm() {
    const {showError} = useAlerts();

    const name = ref('');
    const email = ref('');
    const price = ref(0);
    const phone = ref(0);
    const emergency_phone = ref(0);
    const fare_period_id = ref(0);
    const description = ref('');
    const max_capacity = ref(0);
    const time = ref({
        start_hour: 0,
        end_hour: 24,
    });
    const errors = ref('');

    const validateName = () => {
        const nameRegex = /^[A-Za-z\u00C0-\u00FFñÑ\s]+$/;
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
            showError('El campo del costo no puede ser cero');
            return false;
        }
        if (!priceRegex.test(price.value)) {
            showError('El costo solo debe contener números');
            return false;
        }
        if (price.value === '' || price.value.trim() === '') {
            showError('El campo costo no debe estar vacío');
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
    const validateTime = () => {
        let isValid = true;
        if (time.value.end_hour === time.value.start_hour) {
            showError("Las horas no pueden ser las mismas.");
            isValid = false;
        } else {
            if (time.value.end_hour < time.value.start_hour) {
                if (time.value.end_hour <= 12) {
                    showError("La hora de salida no puede ser menor a la de inicio.");
                }else{
                    showError("La hora de inicio no puede ser mayor a la de salida.");
                }
                isValid = false;
            }
        }
        return isValid;
    };
    const validateMaxCapacity = () => {
        let isValid = true;
        let limit = {max:50,min:5};
        if(max_capacity.value > limit.max){
            showError("La capacidad excede el limite. (50)");
            isValid=false;
        }
        if(max_capacity.value<limit.min){
            showError("La capacidad es menor el limite. (5)");
            isValid=false;
        }
        return isValid;
    };
    return {
        name,
        email,
        price,
        fare_period_id,
        phone,
        emergency_phone,
        description,
        max_capacity,
        time,
        errors,
        validateName,
        validatePrice,
        validatePhone,
        validateEmail,
        validateEmergencyPhone,
        validateTime,
        validateMaxCapacity,
    };
}
