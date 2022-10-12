<template>

    <div class="flex items-center justify-between py-4">
        <button class="bg-indigo-500 text-white p-2"
            v-on:click.prevent="addToCart"
            type="button">
            Ajouter au panier
        </button>
    </div>

</template>

<script setup>
import axios from 'axios';
import useProduct from '../composables/products';
import { inject } from 'vue';

    const { add } = useProduct();
    const productId = defineProps(['productId']);
    const emitter = require('tiny-emitter/instance');
    const toast = inject('toast');

    const addToCart = async() => {
        await axios.get('/sanctum/csrf-cookie');
        await axios.get('/api/user')
            .then(async(result) => {

                let cartCount = await add(productId);
                emitter.emit('cartCountUpdated', cartCount);
                toast.success('Nouveau produit ajouté au panier !');

            })

            .catch(() => {
                toast.error('Merci de vous connecter pour ajouter un produit !');
            });
    }

</script>