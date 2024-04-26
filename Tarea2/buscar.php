<html>

<head>



</head>

<body>

<?php
    include_once("data.php");
    data::Cconexion();

?>


<form class="row g-3" method="post" action="buscar_codigo.php">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Numero de expediente</label>
    <input type="number" class="form-control" id="inputId" name="inputId">
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
  <div class="col-12">
    <button type="button" class="btn btn-primary" onclick="Expediente()">Ir a expediente</button>
  </div>

  

  <script>
       function Expediente(){
            window.location.href = 'expediente.php'
        }

        function Buscar(){
          window.location.href = 'buscar.php'

        }
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</form>


</body>




</html>