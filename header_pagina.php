<header>

     <!-- Encabezado -->       
<div class="container-fluid"> 

  <div class="row encabezado">

    <div class="col-1 mt-3 mb-3">
      <a href="#">
      <img class="logo_escuela" src="imagenes/logo.jpg" alt="logo" id="img1"></a>
    </div>

     <div class="col-11 " >
      <h2 class="mt-5"> Inscripcion A Cursado de Materias</h2>
    </div>
  </div>
    
</div>
      
            

       <!-- Menú de Navegación -->  
      <nav class="navbar navbar-expand-md navbar-dark bg-primary">
      <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <?php
        if (!isset($_SESSION["dnialu"]) && !isset($_SESSION["dnibedel"])){
        ?>
        <ul class="navbar-nav">
        <a class="navbar-brand" href="inicio_alumno.php">Inicio Alumno</a>
        <li class="nav-item">
          <a class="nav-link" href="error404.php">Mis Inscripciones</a>
        </li>
       </ul>
        <ul class="navbar-nav ms-auto">
        </ul>
        <?php
        }else{

          if(isset($_SESSION["dnialu"])){

        ?>
        <div class="mt-2">
        <a class="navbar-brand" href="inicio_alumno.php">Inicio</a>
        <ul class="navbar-nav">
        <!-- <li class="nav-item"> -->
        <!-- <a class="nav-link" href="https://accounts.google.com/">Mis Inscripciones</a> -->
        <!-- </li>	 -->
          <!--<a class="nav-link" href="">Inscribirme</a>-->
          <li class="nav-item"> 

<!-- <select class="form-select" id="floatingSelect" aria-label=""> -->
    <!-- <option selected>Inscripcion a la carrera</option> -->
    <!-- <option value="1">Tecnicatura en desarrollo de software</option> -->
    <!-- <option value="2">Tecnicatura administracion y gestion</option> -->
    
</li>
  <!-- </select> -->
  <label for="floatingSelect"></label>
        </div>
        </li>

       </ul>
        <ul class="navbar-nav ms-auto">
        <div class="mt-2">
        <span class="text-light">
          <?php echo "Alumno: ".$_SESSION["dnialu"] ?> 
        </span>
        </div>
         
        <li class="nav-item">
          <a class="nav-link" href="salir.php">Salir</a>
        </li>	
        
        </ul>
        <?php
        }else{

        ?>
        <a class="navbar-brand" href="inicio_bedelia.php">Inicio</a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="listado_alumno.php">Listado Alumnos</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="error404.php">Listado Inscriptos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="error404.php">Listado No Inscriptos</a>
        </li>
       </ul>
        <ul class="navbar-nav ms-auto">
        <div class="mt-2">
        <span class="text-light">
          <?php echo "Bedel: ".$_SESSION["dnibedel"] ?> 
        </span>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="salir.php">Salir</a>
        </li>	
        
        </ul>

        <?php }} ?>
      </div>
      </div>
      </nav>       
</header>
    
    