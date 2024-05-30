<?php
session_start();


if (!isset($_SESSION["dnialu"]) && !isset($_SESSION["dnibedel"])) {
  header("Location:index.php");
} else {
  if (isset($_SESSION["dnibedel"])) {
    header("Location:inicio_bedelia.php");
  }
}


include('primero.php');
include('header_pagina.php');

 ?>
      
            
    
 
      <section>
  


  <div class="container mt-4 mb-1">
  
  <div class="row">
  <div class="col-12 col-md-6">
<img class="foto_home" src="./imagenes/alumno2.jpg" alt="escuela">
  </div>
  <div class="col-12 col-md-6">
  
  <h2 class="titulo__parrafo">Menu del Alumno</h2>

  <h3>Sistema de Gestion de Alumnado</h3>

  <h3>Tecnicaturas Superiores</h3>
  
  <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem itaque tenetur facilis quis! Perspiciatis eligendi repellat culpa eaque maxime quod sint tempore nemo cumque excepturi, cupiditate ad tempora? Soluta, quaerat!</p> -->

  <!-- botones -->

  <button type="submit" class="btn btn-primary btn-lg"><a href="listado_materia_2_TSoft.php" style="text-decoration:none;color:inherit;"> Tecnicatura en Desarrollo de Software </button>

<br>
<br>
  <button type="submit" class="btn btn-primary btn-lg"><a href="listado_materia_2_TAdmin.php" style="text-decoration:none;color:inherit;"> Tecnicatura en Gestion de las Organizaciones </button>
  
  <!-- fin botones -->


  </div>
  </div>
  </div>

  </section>

  <?php
    include('footer.php');
  ?>
   
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>