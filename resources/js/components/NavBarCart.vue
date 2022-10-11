<template>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex mr-10">
        <a href="/shoppingCart" class="relative">

            <span class="absolute -top-1 left-4 rounded-full bg-indigo-700
            w-5 h-5 text-xs text-white flex items-center
            justify-center">{{ this.cartCount }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-sm
            font-medium leading-5 text-gray-600 " fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
            
        </a>
    </div>
</template>

<script>

    // import { count } from 'console';
    // import { onMounted, ref } from 'vue';
    // const cartCount = ref(0);
    
    // onMounted( async () => {
        //     // await axios.get('/sanctum/csrf-cookie');
        //     // let response = await axios.get('/api/cart/count');
        //     // cartCount.value = response.data.count;
        //     this.cartCount.value = await getCount();
        //     console.log(this.cartCount.value);
        // })
        
    import useProduct from '../composables/products/index.js';
    const { getCount } = useProduct(); 
    const emitter = require('tiny-emitter/instance');
    this.emitter('cartCountUpdated', (count) => this.cartCount = count);
    // emitter.on('cartCountUpdated', (count) => this.cartCount = count);
    
    export default {
        props: {
            cartCount: {
                type: Number,
                default: 0,
            },
            emitter: {
                
            }
        },
        
        methods: {
        },
        async mounted() {
            this.cartCount = await getCount();
        },
    }
</script>