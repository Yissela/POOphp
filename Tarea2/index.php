<html>

<head>



</head>

<body>

<?php
    include_once("data.php");
    data::Cconexion();

?>


<form class="row g-3" method="post" action="codigo.php">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Identificacion</label>
    <input type="number" class="form-control" id="inputId" name="inputId">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="inputNombre" name="inputNombre">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="inputApellidos" name="inputApellidos">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="direccion detallada" name="inputAddress">
  </div>

  <div class="col-md-4">
    <label for="inputCity" class="form-label">Sexo</label>
    <input type="text" class="form-control" id="inputSexo" name="inputSexo">
  </div>

  <div class="col-md-4">
    <label for="inputCity" class="form-label">Genero</label>
    <input type="text" class="form-control" id="inputGenero" name="inputGenero">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Caracteristicas</label>
    <select id="inputCara" class="form-select" name="inputCara">
      <option selected>ofendido</option>
      <option>denunciante</option>
      <option>denunciado</option>
    </select>
  </div>
 
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
  <div class="col-12">
    <button type="button" class="btn btn-primary" onclick="Expediente()">Ir a expediente</button>
  </div>

  <div class="col-12">
    <button type="button" class="btn btn-primary" onclick="Buscar()">Buscar expediente</button>
  </div>

  <div class="col-12">
    <button type="button" class="btn btn-primary" onclick="BuscarPersonas()">Buscar</button>
  </div>

  <script>
       function Expediente(){
            window.location.href = 'expediente.php'
        }

        function Buscar(){
          window.location.href = 'buscar.php'

        }
        function BuscarPersonas(){
          window.location.href = 'buscarPersona.php'
        }
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</form>


</body>




</html>