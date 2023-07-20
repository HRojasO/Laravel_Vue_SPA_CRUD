<template>
    <main>
        <nav class="navbar navbar-expand-lg fixed-top"  style="background-color: #002651;">
            <div class="container-fluid " >
                <a class="navbar-brand" href="#">
                    <!-- llamamos al logo de Vue -->
                    <img  src="https://st1.uvnimg.com/d1/f3/8e7325e64441883e4c135a61dddd/los-mejores-carros-2022.jpg" alt="" width="36" height="30" style="border-radius:50px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link exact-active-class="active" to="/" class="nav-link active" aria-current="page">Inicio</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link exact-active-class="active" to="/nosotros" class="nav-link">nosotros </router-link>
                    </li>   
                     <li class="nav-item">
                        <router-link exact-active-class="active" to="/contacto" class="nav-link">Contacto</router-link>
                    </li>            
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <div style="margin-top: 55px;" >
            <router-view></router-view>
        </div>
        <div  style="background-color: #002651; padding: 25px; margin-bottom:0px ;" >
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      
      <span class="mb-3 mb-md-0 text-white">&copy; 2023 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-white" href="#"><i class="fa-sharp fa-light fa-circle-down"></i></a></li>
      <li class="ms-3"><a class="text-white" href="#"><i class="fas fa-instagram"></i></a></li>
      <li class="ms-3"><a class="text-white" href="#"><i class="fa-brands fa-facebook"></i></a></li>
      
    </ul>
  </footer>
</div>
    </main>
</template>
 
<script>
    export default {}
</script>