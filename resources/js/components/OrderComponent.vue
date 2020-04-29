<template>
    <div>
        <h3>Active Orders</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Venue</th>
                    <th>Order #</th>
                    <th>Status</th>
                    <th>Ordered At</th>
                    <th>Timer</th>
                    <th>Driver</th>
                </tr>
            </thead>

            <tbody>
                <OrderTable :key="order.id" v-for="order in getAllOrders" v-bind:order="order" />
            </tbody>
        </table>
    </div>
</template>

<script>
    import OrderTable from './Order/OrderTable';
    export default {
        components: {
            OrderTable
        },
        name: "OrderComponent",
        mounted() {
            this.$store.dispatch("allDriversFromDatabase");
        },

        computed: {
            getAllOrders() {
                return this.$store.getters.getOrderFormGetters;
            }
        },

        methods: {
            // editMode: function(index, mode) {
            //     switch(mode) {
            //         case 'status':
            //             if (this.edit.status === null) this.edit.status = index;
            //             else this.edit.status = null;
            //             break;
            //         case 'driver':
            //             if (this.edit.driver === null) this.edit.driver = index;
            //             else this.edit.driver = null;
            //             break;
            //     }
            // },

            // getOrders: function() {
            //     axios.get('/api/v1/orders').then(res => {
            //         this.orders = res.data;
            //         // Covert HH:mm format to seconds
            //         this.orders.forEach(order => order.ready_at = Math.abs(moment().diff(moment(order.order_at, 'YYYY-MM-DD HH:mm:ss'), 'seconds')));
            //         setInterval(() => {
            //             this.orders.forEach(order => {
            //                 order.ready_at = Math.abs(moment().diff(moment(order.order_at, 'YYYY-MM-DD HH:mm:ss'), 'seconds'));
            //             });
            //         }, 1000);
            //     });
            // }
        }
    }
</script>
