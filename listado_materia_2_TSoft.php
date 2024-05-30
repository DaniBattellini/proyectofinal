<?php 

include('primero.php');
include('header_pagina.php');
include('footer.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inscripción</title>
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css"> 
    <style>
       
        .container {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-gap: 10px;
            margin-bottom: 10px;
        }

        select, textarea {
            width: 80%;
        }
        .containerComentario{
            width: 100%;
            height: 10%:
        }
        
    </style>
</head>
<body>
    <br>

<div> 
    <h1> 
        <i> Inscripciones a la Condicion de las Materias </i> 
    </h1>
    <h3> Tecnicatura en Desarrollo de Software </h3>
<hr>

<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
  <fieldset>
    <legend>PRIMER AÑO</legend>
    <div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">INGLES TECNICO  :</span>
      
      <input type="radio" id="logicapresencial" name="logicadatos[entrega]" value="Presencial" />
      <label for="logicapresencial">Presencial</label>
      
      <input type="radio" id="logicasemipresencial" name="logicadatos[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="logicasemipresencial">Semipresencial</label>
      
      <input type="radio" id="logiclibre" name="logicadatos[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="logiclibre">Libre</label>
      
      <input type="radio" id="loginoinscribo" name="logicadatos[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="loginoinscribo">No me inscribo</label>
    </div>
    
    <div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Matematica</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Sistemas Operativos</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Unidad de Definicion Institucional - Lengua</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Ingenieria de Software I</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Comunicacion</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Logica y Estructura de Datos</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Tecnologias de la Informacion</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Administracion</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
------------------------------------------------------------------------------------------------
<fieldset>
    <legend>SEGUNDO AÑO</legend>
    <div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Estadistica  :</span>
      
      <input type="radio" id="logicapresencial" name="logicadatos[entrega]" value="Presencial" />
      <label for="logicapresencial">Presencial</label>
      
      <input type="radio" id="logicasemipresencial" name="logicadatos[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="logicasemipresencial">Semipresencial</label>
      
      <input type="radio" id="logiclibre" name="logicadatos[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="logiclibre">Libre</label>
      
      <input type="radio" id="loginoinscribo" name="logicadatos[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="loginoinscribo">No me inscribo</label>
    </div>
    
    <div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Ingles Tecnico II</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Practica Profesionalizante</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Unidad de Definicion Institucional II</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Base de Datos I</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Problematias Socio Contemporaneas</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Ingenieria de Software</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Programacion I</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Innovacion y Desarrolo Emprendedor</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>

------------------------------------------------------------------------------------------------
<fieldset>
    <legend>TERCER AÑO</legend>
    <div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Derecho y Legislacion Laboral:</span>
      
      <input type="radio" id="logicapresencial" name="logicadatos[entrega]" value="Presencial" />
      <label for="logicapresencial">Presencial</label>
      
      <input type="radio" id="logicasemipresencial" name="logicadatos[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="logicasemipresencial">Semipresencial</label>
      
      <input type="radio" id="logiclibre" name="logicadatos[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="logiclibre">Libre</label>
      
      <input type="radio" id="loginoinscribo" name="logicadatos[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="loginoinscribo">No me inscribo</label>
    </div>
    
    <div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Etica y Responsabilidad Social</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Base de Datos II</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Ingenieria de Software II</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Gestion de Proyectos de Software</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Redes y Comunicacion</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
<div class="matter-container">
      <span style="font-weight: bold; white-space: nowrap;">Practica Profesionalizante II</span>
      
      <input type="radio" id="programapresencial" name="progobjeto[entrega]" value="Presencial" />
      <label for="programapresencial">Presencial</label>
      
      <input type="radio" id="programasemipresencial" name="progobjeto[entrega]" value="Semipresencial" style="margin-left: 1rem;" />
      <label for="programasemipresencial">Semipresencial</label>
      
      <input type="radio" id="programalibre" name="progobjeto[entrega]" value="Libre" style="margin-left: 1rem;" />
      <label for="programalibre">Libre</label>
      
      <input type="radio" id="programanoinscribo" name="progobjeto[entrega]" value="No me inscribo" style="margin-left: 1rem;" />
      <label for="programanoinscribo">No me inscribo</label>
    </div>
  </fieldset>
</form>
------------------------------------------------------------------------------------------------

<button type="submit">Enviar</button> 

</body>
</html>








