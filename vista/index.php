<?php
require_once("layouts/header.php");
require_once("nuevo.php");
?>
<div class="container">
    <center> <h1>Listando Productos</h1></center>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="index.php?m=nuevo" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevomodal"><i class="fa-solid fa-circle-plus"></i></a>
</div>
<br>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha Ingreso</th>
        <th scope="col">Stock</th>
        <th scope="col">Precio</th>       
        <th scope="col">Acción</th>        
    </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td scope="row"><?php echo $v['id'] ?> </td>
                        <td scope="row"><?php echo $v['producto'] ?> </td>
                        <td scope="row"><?php echo $v['fecha_ingreso'] ?> </td>
                        <td scope="row"><?php echo $v['stock'] ?> </td>
                        <td scope="row"><?php echo $v['precio'] ?> </td>
                        <td scope="row">
                            <a class="btn btn-outline-warning" href="index.php?m=editar&id=<?php echo $v['id']?>" ><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-outline-danger" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('ESTA SEGURO'); false"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">NO HAY REGISTROS</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>
</div>
<?php
require_once("layouts/footer.php");
?>
