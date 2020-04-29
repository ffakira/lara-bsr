<template>
    <td>
        <div class="row">
            <div class="col-md-7">
                <div v-if="edit">
                    <select class="form-control form-control-sm" v-model="getStatus" name="status">
                        <option selected value="Pending">Pending</option>
                        <option value="Accepted">Accepted</option>
                        <option value="Delivering">Delivering</option>
                        <option value="Complete">Complete</option>
                    </select>
                </div>

                <div v-else>
                    {{ getStatus }}
                </div>
            </div>

            <div class="col-md-5">
                <div v-if="edit">
                    <button v-on:click="changeStatus" class="btn btn-sm btn-success float-right">Update</button>
                </div>

                <div v-else>
                    <button v-on:click="() => edit = !edit" class="btn btn-sm btn-warning float-right">Edit</button>
                </div>
            </div>
        </div>
    </td>
</template>

<script>
    export default {
        name: "OrderStatus",
        props: ['status', 'order_number'],
        data() {
            return {
                edit: false,
                getStatus: this.status
            }
        },
        methods: {
            changeStatus: function () {
                this.edit = !this.edit;
                if (this.status.length !== 0) {
                    axios.post(`/status/update/${this.order_number}`, {status: this.getStatus})
                        .then(res => console.log(`[Client]: Status udpated: ${this.order_number}`))
                        .catch(err => console.log(err));
                }
            }
        }
    }
</script>
