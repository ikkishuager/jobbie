
<?php 

include "mandarcarrito.php";
include "BD/config.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="inicio.php"><img src="imagenes/jobbie.png"  alt="" class="img"/></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Carrito.php">Carrito (<?php
                        echo (empty($_SESSION['carrito']) ? 0 : count($_SESSION['carrito']));
                    ?>)</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
<h3>Lista del Carrito</h3>
<?php if(!empty($_SESSION['carrito'])) { ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th width="40%">Descripción</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%">--</th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0;?>
        <?php foreach($_SESSION['carrito'] as $indice => $producto): ?>
        <tr>
            <td width="40%"><?= $producto["productname"] ?></td>
            <td width="15%" class="text-center"><?= $producto["existencia"] ?></td>
            <td width="20%" class="text-center">$<?= $producto["precioVenta"] ?></td>
            <td width="20%" class="text-center">$<?= number_format($producto["existencia"] * $producto['precioVenta']) ?></td>
            <td width="5%">
                <form action="" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $producto['id'] ?>">
                    <button class="btn btn-danger" name="btnAccion" value="Eliminar" type="submit">Eliminar</button>
                    
                </form>
            </td>
        </tr>
        <?php $total = $total + ($producto['existencia'] * $producto['precioVenta']);?>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total); ?></h3></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="5">
                <form action="pagar.php" method="post">
                    
                    </div>
                    <button class="btn btn-warning btn-lg btn-block" type="submit" name="btnAccion" value="proceder">
                        Proceder a pagar >>
                    </button>
                </form>
            </td>
        </tr>
    </tfoot>
</table>
<?php } else { ?>
    <div class="alert alert-success" role="alert">
        No hay productos en el carrito...
    </div>
<?php } ?>


