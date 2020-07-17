<template>
    <table class="table mt-5" >
        <thead>
        <tr>
            <th scope="col">
                CarNumber
                <input v-on:keyup="Search" name="carNumber" type="text" class="form-control" v-model="fields.carNumber">
            </th>
            <th scope="col">
                OwnerName
                <input v-on:keyup="Search" name="ownerName" type="text" class="form-control" v-model="fields.ownerName">
            </th>

            <th scope="col">
                OwnerPhone
                <input v-on:keyup="Search"  name="ownerPhone" type="text" class="form-control" v-model="fields.ownerPhone">
            </th>
            <th scope="col">
                Date<br/>
                <v-date-picker
                    mode='range'
                    v-model='fields.range'
                />

            </th>
        </tr>
        </thead>
        <tbody>

        <tr  v-for="car in carList" :key="car.id">
            <th scope="row"> {{ car.carNumber }} </th>
            <td> {{car.ownerName}} </td>
            <td> {{car.ownerPhone}}</td>
            <td>{{car.created_at | moment("MMMM Do YYYY , h:mm:ss a")}}</td>
        </tr>


        </tbody>
    </table>
</template>

<script>
    export default {
        name: "ListCar",
        props: [
            'cars'
        ],
        data () {
            return {
                fields:{ },
                carList : this.cars
            };
        },
        watch: {
            'fields.range': function(e){
                this.Search();
            }
        },
        methods:{
            Search () {
                axios.get('/search' ,{
                    params: {
                        carNumber_like :  this.fields.carNumber ,
                        ownerName_like: this.fields.ownerName,
                        ownerPhone_like: this.fields.ownerPhone,
                        created_between:  this.fields.range,
                    }
                }).then(
                    response =>{
                       this.carList = response.data;

                    }
                ).catch(
                    error => {

                    })
            }
        }

    }
</script>

<style scoped>

</style>
