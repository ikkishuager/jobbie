<?php session_start();
    $mensaje = '';
    if (isset($_POST['btnAccion'])) {
        switch ($_POST['btnAccion']) {
            case 'Agregar':
                if ($_POST['id']) {
                    $id = $_POST['id'];
                    $mensaje .= 'OK ID correcto.'. '<br/>';
                } else {
                    $mensaje .= 'Upsss... ID incorrecto.'.'<br/>';
                }
                if ($_POST['productname']) {
                    $nombre = $_POST['productname'];
                    $mensaje .= 'OK NOMBRE correcto'. '<br/>';
                } else {
                    $mensaje .= 'Upsss... NOMBRE incorrecto.'.'<br/>';
                }
                if ($_POST['existencia']) {
                    $cantidad = $_POST['existencia'];
                    $mensaje .= 'OK CANTIDAD correcto.'. '<br/>';
                } else {
                    $mensaje .= 'Upsss... CANTIDAD incorrecto.'.'<br/>';
                }
                if ($_POST['precioVenta']) {
                    $precio = $_POST['precioVenta'];
                    $mensaje .= 'OK PRECIO correcto.'. '<br/>';
                } else {
                    $mensaje .= 'Upsss... PRECIO incorrecto.'.'<br/>';
                }

                if (!isset($_SESSION['carrito'])) {
                    $producto = array(
                        'id' => $id,
                        'productname' => $nombre,
                        'precioVenta' => $precio,
                        'existencia' => $cantidad
                    );
                    $_SESSION['carrito'][0] = $producto;
                    $mensaje = "Producto agregado al carrito";
                } else {
                    $idProductos = array_column($_SESSION['carrito'], 'id');
                    if (in_array($id, $idProductos)) {
                        echo '<script>console.log("El producto ya ha sido seleccionado");</script>';
                        $mensaje = "";
                    } else {
                        $numeroProductos = count($_SESSION['carrito']);
                        $producto = array(
                            'id' => $id,
                            'productname' => $nombre,
                            'precioVenta' => $precio,
                            'existencia' => $cantidad
                        );
                        $_SESSION['carrito'][$numeroProductos] = $producto;
                        $mensaje = "Producto agregado al carrito";
                    }
                }
                // $mensaje = print_r($_SESSION, true);
            break;
            case "Eliminar":
                if ($_POST['id']) {
                    $id = $_POST['id'];
                    foreach ($_SESSION['carrito'] as $indice => $producto) {
                        if ($producto['id'] == $id) {
                            unset($_SESSION['carrito'][$indice]);
                            echo '<script>console.log("Elemento eliminado...");</script>';
                        }
                    }
                } else {
                    $mensaje .= 'Upsss... ID incorrecto' . '<br/>';
                }
            break;
            default:
                # code...
                break;
        }
    }


?>