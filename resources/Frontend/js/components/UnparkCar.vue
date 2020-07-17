<template>
    <form class="offset-3 col-6 mt-5" @submit.prevent="submit">
        <div class="alert alert-success" v-show="success">Vehicle is out of parking successfully.</div>

        <div class="form-group">
            <label for="carNumber">Car Number</label>
            <input name="carNumber" type="text" class="form-control" v-model="fields.carNumber" id="carNumber" placeholder="PK9988PK">
            <div class="alert alert-danger" v-if="errors && errors.carNumber">
                {{ errors.carNumber[0] }}
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary w-100 mt-5 mb-2">UnPark</button>
        </div>
    </form>
</template>

<script>
    export default {
        name: "UnparkCar",
        data(){
            return{
                fields:{},
                success: false,
                errors: {}
            }
        },
        methods:{
            submit(){
                axios.post('unpark' ,this.fields).then(
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
