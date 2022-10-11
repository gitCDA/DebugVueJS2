export default function useProduct() {

    const add = async(productId) => {
        let response = await axios.post('/api/products',
        {
            productId: productId
        }
        );
        
        return response.data.count;

    }

    const getCount = async() => {
        let response = await axios.get('/api/products/count');
        return response.data.count;
    }

    return {
        add,
        getCount,
    }
}