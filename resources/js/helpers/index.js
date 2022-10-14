import axios from "axios"

export const formatPrice = (price) => {
    return new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'EUR' })
        .format(price / 100)
}

export const saveOrder = async () => {
    await axios.post('/orders')
        // .then(r => console.log(r))
        // .catch(e => console.log(e));
}