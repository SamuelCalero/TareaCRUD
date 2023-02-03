<?php
require_once("layouts/header.php");
?>
<div class="modal fade" id="nuevomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresando un nuevo Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="get" class="row row-cols-4">
  <div class="col-6">
    <label for="producto" class="form-label" name="producto">Producto</label>
    <input type="text" class="form-control" id="producto" name="producto" required>
  </div>
  <div class="col-6">
    <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
  </div>
  <div class="col-6">
    <label for="stock" class="form-label" name="stock">Stock</label>
    <input type="number" class="form-control" id="stock" name="stock" required>
  </div>
  <div class="col-6">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" step=".01" required>
  </div>
  <div class="p-3 d-grid gap-2 col-2 mx-auto">
 
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="m" class="btn btn-dark" value="guardar"><i class="fa-solid fa-floppy-disk"></i></button>
      </div>
    </div>
  </div>
  </form>
</div>
<?php
require_once("layouts/footer.php");