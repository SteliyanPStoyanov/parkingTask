<template>
    <form class="offset-3 col-6 mt-5" @submit.prevent="submit">
        <div class="alert alert-success" v-show="success">Vehicle is park successfully.</div>

        <div class="form-group">
            <label for="carNumber">Car Number</label>
            <input name="carNumber" type="text" class="form-control" v-model="fields.carNumber" id="carNumber" placeholder="PK9988PK">
            <div class="alert alert-danger" v-if="errors && errors.carNumber">
                {{ errors.carNumber[0] }}
            </div>
        </div>
        <div class="form-group">
            <label for="catType">Car type</label>
            <select name="carType" class="form-control" id="catType" v-model="fields.carType">
                <option value="1">Car</option>
                <option value="3">Truck</option>
            </select>
            <div class="alert alert-danger" v-if="errors && errors.carType">
                {{ errors.carType[0] }}
            </div>
        </div>
        <div class="form-group">
            <label for="ownerName">Owner Name</label>
            <input name="ownerName" type="text" class="form-control" v-model="fields.ownerName" id="ownerName">
            <div class="alert alert-danger" v-if="errors && errors.ownerName">
                {{ errors.ownerName[0] }}
            </div>
        </div>
        <div class="form-group">
            <label for="ownerPhone">Owner Phone</label>
            <input name="ownerPhone" type="text" class="form-control" v-model="fields.ownerPhone" id="ownerPhone">
            <div class="alert alert-danger" v-if="errors && errors.ownerPhone">
                {{ errors.ownerPhone[0] }}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary w-100 mt-5 mb-2">Park</button>
        </div>
    </form>
</template>

<script>
    export default {
        name: "ParkCar",
        data(){
            return{
                fields:{},
                success: false,
                errors: {}
            }
        },
        methods:{
            submit(){
                axios.post('park' ,this.fields).then(
                    response =>{
                        this.fields = {};
                        this.success = true;
                        this.errors = {};
                    }
                ).catch(
                    error => {
                        if (error.response.status == 422) {
                            this.errors = error.response.data.errors;
                        }
                })
            }
        }
    }
</script>

<style scoped>

</style>
