<template>
    <tr>
        <td>{{ order.venue.name }}</td>
        <td>{{ order.order_number }}</td>
        <OrderStatus
            v-bind:status="order.status"
            v-bind:order_number="order.order_number"
        />
        <td>{{ convertHMS(order.order_at) }}</td>
        <td>{{ convertSecondsHMS(order.ready_at) }}</td>
        <td>
            <OrderDriver
                v-bind:order_number="order.order_number"
                v-bind:driver="order.driver"
            />
        </td>
    </tr>
</template>

<script>
    import OrderStatus from './OrderStatus';
    import OrderDriver from './OrderDriver';

    export default {
        name: "OrderTable",
        components: {
            OrderStatus,
            OrderDriver
        },
        props: ['order'],
        mounted() {
            this.timer();
        },
        data() {
          return {
              edit: false,
              getOrder: this.order
          }
        },

        computed: {
            getAllOrders: function() {
                return this.$store.getters.getOrderFormGetters;
            }
        },

        methods: {
            // Convert timestamp to HH:MM:SS
            convertSecondsHMS: function(value) {
                const sec = parseInt(value, 10);
                let hours   = Math.floor(sec / 3600);
                let minutes = Math.floor((sec - (hours * 3600)) / 60);
                let seconds = sec - (hours * 3600) - (minutes * 60);
                // add 0 if value < 10
                if (hours   < 10) hours = "0" + hours;
                if (minutes < 10) minutes = "0" + minutes;
                if (seconds < 10) seconds = "0" + seconds;
                return hours+':'+minutes+':'+seconds;
            },

            // Convert YYYY-MM-DD HH:mm:ss to HH:mm
            convertHMS: function(value) {
                return moment(value).format('HH:mm');
            },

            timer: function() {
                setInterval(() => {
                    this.getOrder.ready_at = Math.abs(moment().diff(moment(this.getOrder.order_at, 'YYYY-MM-DD HH:mm:ss'), 'seconds'));
                }, 1000);
            }
        }
    }
</script>
