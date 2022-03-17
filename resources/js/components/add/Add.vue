<script>
    export default{
        data(){
            return {
                producto:"",
                costo: "",
                data:{pr:"",cs:""}
            }
        },
        methods:{
            saveProducto: function(){
                if((this.producto != "" && this.producto != undefined) && (this.costo != "" && this.costo != undefined)){
                   this.data.pr = this.producto
                   this.data.cs = this.costo
                   axios.post("/save-producto", this.data)
                        .then(rsp => {
                            if(rsp.data == 1){
                                if (confirm("Producto Almacenado Correctamente")) {
                                    this.$router.push({ name: 'Home' });
                                }else{
                                    this.$router.push({ name: 'Home' });
                                }
                            }
                        })
                        .catch(error => {
                            console.log(error)
                    })
                }
            }
        }
    }
</script>


<template>
    <div>
        <div class="container  h-100">
            <br>
            <h4> Nuevo Producto </h4>
            <br><br>
            <div class="row h-100 justify-content-center align-items-center">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Producto:</label>
                    <input type="text" v-model="producto" class="form-control" id="exampleFormControlInput1" placeholder="producto">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Costo:</label>
                    <input type="numeric" v-model="costo" class="form-control" id="exampleFormControlInput1" placeholder="Costo">
                </div>
                <br>
                <button class="btn btn-info" v-on:click="saveProducto()">Guardar</button>
            </div>
        </div>
    </div>
</template>
