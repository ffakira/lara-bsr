<template>
    <div>
        <h3>Drivers</h3>

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Total Orders</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="driver in drivers" :key="driver.id">
                <td>{{driver.name}}</td>
                <td>{{driver.orderLength}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "DriverComponent",
        data() {
            return {
                drivers: [],
                order: []
            }
        },
        mounted() {
            axios.get('/api/v1/drivers')
                .then(res => {
                    res.data.forEach(driver => {
                        axios.get(`/api/v1/driver/${driver.id}/orders`)
                            .then(orderRes => {
                                driver.orderLength = orderRes.data.length;
                                this.drivers.push(driver);
                            })
                            .catch(err => `[Client Error]: ${err}`);
                    });
                })
                .catch(err => `[Client Error]: ${err}`);
        },

        methods: {
            getDriverOrders(driverId) {
                axios.get(`/api/v1/driver/${driverId}/orders`)
                    .then(res => console.log(res.data.length))
                    .catch(err => `[Client Error]: ${err}`);
            }
        }
    }
</script>
