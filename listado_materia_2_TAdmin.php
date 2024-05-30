<?php 

include('primero.php');
include('header_pagina.php');
include('footer.php');

?>

<?php

session_start();

if(!isset($_SESSION["dnialu"]) && !isset($_SESSION["dnibedel"])){
    header("Location:index.php");
}
else{
    if (isset($_SESSION["dnialu"])) {
        header("Location:listado_materia2.php");
    }
}

?>
<?php

