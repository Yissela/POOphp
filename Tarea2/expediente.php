<form class="row g-3" method="post" action="expe_codigo.php">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Numero de expediente</label>
    <input type="text" class="form-control" id="inputExpediente" name="inputExpediente">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Identificacion de ofendido</label>
    <input type="text" class="form-control" id="inputId" name="inputOfendido">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Identificacion de denunciante</label>
    <input type="text" class="form-control" id="inputId" name="inputDenunciante">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Identificacion del denunciado</label>
    <input type="text" class="form-control" id="inputId"  name="inputDenunciado">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Breve narracion</label>
    <input type="text" class="form-control" id="inputBreve" placeholder="breve narracion de los hechos" name="inputBreve">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Delitos</label>
    <input type="text" class="form-control" id="inputDelitos" name="inputDelitos">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="inputFecha" name="inputFecha">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name= "inputEstado">
      <option selected>En observacion</option>
      <option>En proceso</option>
    </select>
  </div>
 
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">