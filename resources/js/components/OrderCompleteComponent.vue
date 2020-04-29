<template>
    <div>
        <h3>Completed Orders</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Venue</th>
                    <th>Order #</th>
                    <th>Status</th>
                    <th>Ordered At</th>
                    <th>Completed At</th>
                    <th>Driver</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="order in orders" :key="order.id">
                    <td>{{ order.venue.name }}</td>
                    <td>{{ order.order_number }}</td>
                    <td>{{ order.status }}</td>
                    <td>{{ order.order_at }}</td>
                    <td>{{ order.order_complete_at }}</td>
                    <td>{{ order.driver.name }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "OrderCompleteComponent",
        data: function() {
            return {
                orders: null
            }
        },
        mounted() {
            this.getCompleteOrders();
        },
        methods: {
            getCompleteOrders: function() {
                axios.get('/api/v1/orders/complete').then(res => this.orders = res.data);
            }
        }
    }
</script>
