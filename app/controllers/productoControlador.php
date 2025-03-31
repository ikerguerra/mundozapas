<?php
require_once __DIR__ . '/../models/productoModelo.php';
require_once __DIR__ . '/../models/imgProductoModelo.php';
require_once __DIR__ . '/../controllers/imgsProductoControlador.php';

// Controlador para obtener un producto a partir de su ID
function obtenerProductoController($idProducto)
{
    $producto = obtenerProducto($idProducto);
    
    if (!$producto) {
        return []; // Retornar un array vacío si hay un error
    }

    return $producto;
}

// Controlador para obtener todos los productos
function obtenerProductosController()
{
    $productos = obtenerProductos();

    if (!$productos) {
        return []; // Retornar un array vacío si hay un error
    }

    return $productos;
}

// Controlador para obtener productos junto con sus imágenes
function obtenerProductosConImgsController()
{
    $productosImgs = obtenerProductosConImgs();

    if (!$productosImgs) {
        return []; // Retornar un array vacío si hay un error
    }

    return $productosImgs;
}

// Controlador para insertar un nuevo producto
function insertarProductoController()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];

        // Inserta el producto en la base de datos
        $idProducto = insertarProducto($nombre, $descripcion, $precio);

        // Inserta las imágenes asociadas al producto
        insertarImgsProductoController($idProducto);

        if ($idProducto) {
            echo 'Producto agregado';
        } else {
            echo $idProducto;
        }
    }
}

// Controlador para actualizar un producto existente
function actualizarProductoController()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $idProducto = $_POST['id_producto'];

        // Actualiza el producto en la base de datos
        actualizarProducto($nombre, $descripcion, $precio, $idProducto);

        // Inserta nuevas imágenes asociadas al producto
        insertarImgsProductoController($idProducto);

        // Redirige a la página de administración
        header("Location: ../views/pages/admin.php");
    }
}

// Controlador para eliminar un producto
function eliminarProductoController()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_producto'])) {
        $idProducto = $_POST['id_producto'];

        // Elimina el producto de la base de datos
        eliminarProducto($idProducto);
    }
}

// Verifica si la solicitud es POST y si se envió la accion a realizar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion'])) {
    $accion = $_POST['accion'];

    switch ($accion) {
        case 'insertar':
            insertarProductoController();
            break;
        case 'editar':
            actualizarProductoController();
            break;
        case 'eliminar':
            eliminarProductoController();
            break;
    }
}
?>