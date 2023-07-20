<template>
    <div class="row container pt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Imagen</label>
                                    <!-- <input type="text" class="form-control" v-model="blog.imagen"> -->
                                    <input type="file" class="form-control">
                                    
                                    <img :src="blog.imagen" style="width: 18rem; margin: 10px;">

                                </div>
                            </div> 
                           
                           <label> <h4>Datos del vehículo</h4></label>
                           <div class="col-12 col-md-4 mb-2">
                                <label >MARCA</label>
                                <select class="form-select" aria-label="Default select example" v-model="blog.marca">
                                  <option selected></option>
                                  <option value="BMW">BMW</option>
                                  <option value="Mercedes-Benz">Mercedes-Benz</option>
                                  <option value="Ford">Ford</option>
                                  <option value="HONDA">HONDA</option>
                                  <option value="HYUNDAI">HYUNDAI</option>
                                  <option value="ISUZU">ISUZU</option>
                                </select>
                            </div>
                            <div class=" col-12 col-md-4 mb-2">
                                <label >Placa</label>
                                <input type="text"  class="form-control"  v-model="blog.placa">
                            </div>
                            <div class="col-12 col-md-4 mb-2">
                               <label >AÑO DE FABRICACION</label>
                               <input type="number"  class="form-control" v-model="blog.fabricacion">
                           </div>
                            <div class="col-12 col-md-4 mb-2">
                                <label >tipo de vehículo</label>
                                <select class="form-select" aria-label="Default select example" v-model="blog.tipo">
                                  <option selected></option>
                                  <option value="Micro">Micro</option>
                                  <option value="Sedán">Sedán</option>
                                  <option value="Hatchback">Hatchback</option>
                                  <option value="Deportivo">Deportivo</option>
                                  <option value="Pickup">Pickup</option>
                                  <option value="SUV">SUV</option>
                                  <option value="Descapotable">Descapotable</option>
                                  <option value="Todoterreno">Todoterreno</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4  mb-2">
                               <label >color</label>
                               <input type="text"  class="form-control" v-model="blog.color">
                           </div>
                           <div class="col-12 col-md-4 mb-2">
                               <label >tipo de combustible</label>
                               <select class="form-select" aria-label="Default select example" v-model="blog.combustible">
                                  <option selected></option>
                                  <option value="Diésel">Diésel</option>
                                  <option value="Sedán">Gasolina</option>
                                  <option value="Híbridos combinados">Híbridos combinados</option>
                                  <option value="Híbridos enchufables">Híbridos enchufables</option>
                                  <option value="Eléctrico">Eléctrico</option>
                                </select>
                           </div>
                           <div class="col-12 col-md-4  mb-2">
                               <label> precio</label>
                               <input type="number"  class="form-control" v-model="blog.precio">
                           </div>                           <label><h4>Datos del propietario</h4></label>
                           <div class="col-12 col-md-4 mb-2">
                                <label >Nombres</label>
                                <input type="text"  class="form-control"  v-model="blog.nombres">
                            </div>
                            <div class="col-12 col-md-4 mb-2">
                                <label >Apellidos</label>
                                <input type="text"  class="form-control"  v-model="blog.apellidos">
                            </div>
                            <div class="col-12 col-md-4 mb-2">
                                <label >cell</label>
                                <input type="number"  class="form-control"  v-model="blog.cell">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "vform" ;
export default {
    name:"editar-blog",
    data(){
        return {
            blog:{
                imagen:"",
                marca:"",
                placa:"",
                fabricacion:"",
                tipo:"",
                color:"",
                combustible:"",
                nombres:"",
                apellidos:"",
                cell:"",
                precio:"",
            }
        }
    },
    mounted(){
        this.mostrarBlog()
    },
    methods:{
        async mostrarBlog(){
            await this.axios.get(`/api/blog/${this.$route.params.id}`).then(response=>{
                const { imagen,marca, placa,fabricacion,tipo, color,combustible,nombres,apellidos,cell,precio } = response.data
                this.blog.imagen = imagen
                this.blog.marca =marca
                this.blog.placa = placa
                this.blog.fabricacion = fabricacion
                this.blog.tipo = tipo
                this.blog.color = color
                this.blog.combustible = combustible
                this.blog.nombres = nombres
                this.blog.apellidos = apellidos
                this.blog.cell = cell
                this.blog.precio = precio
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/blog/${this.$route.params.id}`,this.blog).then(response=>{
                this.$router.push({name:"admin"})
            }).catch(error=>{
                console.log(error)
            })
        },
    }
}
</script>