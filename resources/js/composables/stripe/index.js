import axios from "axios";
import { ref } from "vue";

export default function useStripe() {

    const elements = ref(null);

    const initialize = async() => {
        const stripe = Stripe(process.env.MIX_STRIPE_TEST_PUBLIC_KEY);
        console.log(stripe)

        const clientSecret = await axios.post('/paymentIntent')
            console.log(clientSecret)
            .then(r => r.data.clientSecret)
            .catch(err => console.log(err));

            elements.value = stripe.elements({ clientSecret });
            
            const paymentElement = elements.value.create("payment");
            console.log(paymentElement);
            paymentElement.mount("#payment-element");
    }

    return {
        initialize,
    }
}