import axios from "axios";
import { ref } from "vue";

export default function useStripe() {

    const elements = ref(null);

    const initialize = async() => {
        const stripe = Stripe(process.env.M)

        const clientSecret = axios.post('/paymentIntent')
            .then((result) => {
                console.log(result)
            }).catch((err) => {
                console.log(err)
            });
        
        elements.value = stripe.elements({ clientSecret });
        
        //   const paymentElement = elements.create("payment");
        //   paymentElement.mount("#payment-element");
    }
}