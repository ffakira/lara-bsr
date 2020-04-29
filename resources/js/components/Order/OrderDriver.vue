<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <div v-if="edit">
                    <select class="form-control form-control-sm" v-model="getDriverName" name="driver" id="driver">
                        <option selected value="Jamar Blair">Jamar Blair</option>
                        <option value="Cornelius Baker">Cornelius Baker</option>
                        <option value="Dante Park">Dante Park</option>
                        <option value="Mary Nunez">Mary Nunez</option>
                        <option value="Dominique Golden">Dominique Golden</option>
                    </select>
                </div>

                <div v-else>
                    {{ getDriver.name ? getDriver.name : 'n/a'}}
                </div>
            </div>

            <div class="col-md-6">
                <div v-if="edit">
                    <button v-on:click="assignDriver(order_number)" class="btn btn-sm btn-warning float-right">Update Driver</button>
                </div>

                <div v-else>
                    <button v-on:click="()=> this.edit = !this.edit" class="btn btn-sm btn-success float-right">Assign Driver</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['driver', 'order_number'],
        name: "OrderDriver",
        mounted() {

        },
        data() {
            return {
                edit: false,
                getDriver: this.driver,
                getDriverName: 1,
            }
        },

        methods: {
            assignDriver: function(order_number) {
                this.edit = !this.edit;
                axios.post(`driver/update/${order_number}`, {driver: this.getDriverName})
                    .then(res => {
                        console.log(`[Client]: Driver updated`);
                        this.getDriver.name = this.getDriverName
                    })
                    .catch(err => console.log(err));
            }
        }

    }
</script>
