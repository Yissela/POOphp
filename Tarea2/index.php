<html>

<body>

<?php
    include_once('data.php');
   



?>

<form class="row g-3">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Identificacion</label>
    <input type="text" class="form-control" id="inputId">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="inputNombre">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="inputApellidos">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="direccion detallada">
  </div>

  <div class="col-md-4">
    <label for="inputCity" class="form-label">Sexo</label>
    <input type="text" class="form-control" id="inputSexo">
  </div>

  <div class="col-md-4">
    <label for="inputCity" class="form-label">Genero</label>
    <input type="text" class="form-control" id="inputGenero">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Caracteristicas</label>
    <select id="inputCara" class="form-select">
      <option selected>ofendido</option>
      <option>denunciante</option>
      <option>denunciado</option>
    </select>
  </div>
 
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
  <div class="col-12">
    <button type="buton" class="btn btn-primary" onclick="Expediente()">Ir a expediente</button>
  </div>

  <script>
       function Expediente(){
            window.location.href = 'expediente.php'
        }


  </script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</form>


</body>



</html>