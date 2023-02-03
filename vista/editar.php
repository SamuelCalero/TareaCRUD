<?php
require_once("layouts/header.php");
?>
<center> <h1>Editando un Producto</h1></center>
<div class="container">
<form action="" method="get" class="row row-cols-4">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
  <div class="col-6">
    <label for="producto" class="form-label" name="producto">Producto</label>
    <input type="text" class="form-control" id="producto" name="producto" value="<?php echo $v['producto'] ?>" required>
  </div>
  <div class="col-6">
    <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $v['fecha_ingreso'] ?>" required> 
</div>
<div class="col-6">
    <label for="stock" class="form-label" name="stock">Stock</label>
    <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $v['stock'] ?>" required>
  </div>
  <div class="col-6">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $v['precio'] ?>" step=".01" required> 
    <input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
</div>
<?php
        endforeach;
    endforeach;
    ?>
<div class="p-2 d-grid gap-2 col-2 mx-auto">
  <button type="submit" name="m" class="btn btn-dark" value="actualizar"><i class="fa-solid fa-floppy-disk"></i></button>
  </div>

</form>
</div>
<?php
require_once("layouts/footer.php");