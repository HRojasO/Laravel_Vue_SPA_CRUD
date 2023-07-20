<template>
    <div class="container pt-5 " >
        <div class="row" >
            <div class="col-12 mb-2">
                <!-- llamamos al componente para Crear   -->
                <router-link :to='{name:"crearBlog"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
            </div>
            <div class="col-12">             
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>ID</th>
                                        <th>Imagen</th>
                                        <th>Datos del vehículo</th>
                                        <th>Datos del propietario</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="blog in blogs" :key="blog.id">
                                        <td>{{ blog.id }}</td>
                                        <td> 
                                            <img :src="blog.imagen" style="width: 18rem; margin: 10px;">
                                            </td>
                                        <td><span><b>Marca:  </b></span>{{blog.marca}}<br>
                                            <span><b>Placa:  </b></span>{{blog.placa}}<br>                                    
                                            <span><b>tipo:  </b></span>{{blog.fabricacion}}<br>                                    
                                            <span><b>color:  </b></span>{{blog.color}}<br>                            
                                            <span><b>precio:  </b></span>${{blog.precio}}<br>                            
                                            <span><b>combustible:  </b></span>{{blog.combustible}}<br>                                    
                                        </td>     
                                        <td><span><b>Nombres:  </b></span>{{blog.nombres}}<br>
                                            <span><b>Apellidos:  </b></span>{{blog.apellidos}}<br>
                                            <span><b>Cell:  </b></span>{{blog.cell}}<br>
                                            
                                        </td>
                                        
                                        <td>
                                            <!-- llamamos al componente para Editar     -->
                                            <router-link :to='{name:"editarBlog",params:{id:blog.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                            <a type="button" @click="borrarBlog(blog.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>                          
            </div>
        </div>
    </div>
    </template>
    
    <script>
   
    export default {
        name:"blogs",
        data(){
            return {
                blogs:[]
            }
        },
        mounted(){
            this.mostrarBlogs()
        },
        methods:{
            async mostrarBlogs(){
                await this.axios.get('/api/blog').then(response=>{
                    this.blogs = response.data
                }).catch(error=>{
                    console.log(error)
                    this.blogs = []
                })
            },
            borrarBlog(id){
                if(confirm("¿Confirma eliminar el registro?")){
                    this.axios.delete(`/api/blog/${id}`).then(response=>{
                        this.mostrarBlogs()
                    }).catch(error=>{
                        console.log(error)
                    })
                }
            }
        }
    }
    </script>