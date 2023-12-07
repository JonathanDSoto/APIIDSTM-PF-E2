import { useToast } from "vue-toastification";

export const useAlerts = ()=>{
    const toast = useToast();

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
    return{
        showError,
        showSuccess
    };
};
