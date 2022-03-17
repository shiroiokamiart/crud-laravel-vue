<script>
    export default{
        data(){
            return {
                list:[]
            }
        },
        methods:{
            getListItems: function(){
                axios.get("/get-list")
                    .then(rsp => {
                        this.list = rsp.data
                    })
                    .catch(error => {
                        console.log(error)
                    })
            },
            deleteProducto: function(value){
                axios.delete("/delete/producto/"+value).then(rsp =>{
                    if(rsp.data == 1){
                        this.getListItems()
                    }
                })
                .catch(error => {
                    console.log(error)
                })
            }
        },
        mounted() {
            this.getListItems()
        }
    }
</script>


<template>
    <div>
        <div class="container  h-100">
            <br>
            <router-link class="nav-link" to="/add">Add</router-link>
            <br><br>
            <div class="row h-100 justify-content-center align-items-center">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Productos</th>
                            <th>Costo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="items in list" :key="items.id">
                            <td>{{items.id}}</td>
                            <td>{{items.name}}</td>
                            <td>{{items.monto}}</td>
                            <td>
                                <button class="btn btn-danger" v-on:click="deleteProducto(items.id)">Eliminar</button> &nbsp;
                                <router-link class="btn btn-warning" :to="{path:'update', query:{id:items.id, name:items.name, costo:items.monto}}">Actualizar</router-link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
