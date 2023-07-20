<template>
<div>
    <div class="" id="enc"  >
        <div class="row col-12">
            <div class="col-12 text-center pr-0 " style="margin-top: 80px;">
                <h1>
                    <b><span style="color:white"> Nombre</span>
                        <span class="badge bg-secondary">EMPRESA</span>
                    </b>
                </h1>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <h1 class="text-center "><b>Nuestros productos</b></h1>
        <div class="row justify-content-evenly" >
            <div v-for="blog in blogs" :key="blog.id" class="card " style="width: 18rem; margin: 10px;">

              <img :src="blog.imagen" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{blog.marca}} ${{blog.precio}}</h5>
                <p class="card-text">
                    <span><b>Placa:  </b></span>{{blog.placa}}<br>                                    
                    <span><b>tipo:  </b></span>{{blog.fabricacion}}<br>                                    
                    <span><b>color:  </b></span>{{blog.color}}<br>                                    
                    <span><b>combustible:  </b></span>{{blog.combustible}}<br>
                </p>
                <p class="card-text">
                    <h5 class="card-title">Datos del propietario</h5>
                    <span><b>Nombre:  </b></span>{{blog.nombres}}<br>                                    
                    <span><b>Apellidos:  </b></span>{{blog.apellidos}}<br>
                </p>
                
                     <a :href="link+blog.cell" class="btn" style="background:#0df053; color:white">solicitar producto
                     </a>
                     <!-- <a v-bind:href="{{blog.cell}}"> -->
              </div>

            </div>
        </div>
    </div> 
</div>
</template>
    
    <script>
    export default {
        data(){
            return {
                blogs:[],
                link:"https://api.whatsapp.com/send?phone=",
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
        }
    }
    </script>
    <style>
    #enc{
        background:url("/img/fondo.jpg");
        height:350px ;
        background-image: no-repeat;
    background-image: fixed;
    background-image: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    
    </style>