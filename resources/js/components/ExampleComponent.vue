<template>

    <div class="flex items-center justify-between py-4">
        <button class="bg-black text-white p-2"
            v-on:click.prevent="addToCart"
            type="button">
            Ajouter au panier
        </button>
    </div>

</template>

<script setup>

    const addToCart = () => {
        console.log('added');
    }

    // export default {
    //     addToCart() {
    //         console.log('Component mounted.')
    //     }
    // }
    
</script>