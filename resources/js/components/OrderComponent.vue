<template>
    <div>
        <OrderBar></OrderBar>
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
    import OrderBar from "./Chart/OrderBar";
    export default {
        components: {
            OrderTable,
            OrderBar
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
    }
</script>
