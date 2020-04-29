export default {
    state: {
        orders: []
    },

    getters: {
        getOrderFormGetters(state) {
            return state.orders;
        }
    },

    actions: {
        allDriversFromDatabase(ctx) {
            axios.get('/api/v1/orders')
                .then(res => {
                    console.log(`[CLIENT AXIOS]: ${JSON.stringify(res.data)}`);
                    ctx.commit("orders", (res.data))
                }).catch(err => console.log(err));
        }
    },

    mutations: {
        orders(state, data) {
            return state.orders = data;
        }
    }
}
