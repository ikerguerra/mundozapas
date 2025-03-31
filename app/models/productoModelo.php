<?php
require_once __DIR__ . '/../config/conexion.php';

// Consulta un producto a partir de su ID.
function obtenerProducto($idProducto)
{
    global $conexion; // Usamos la conexión global

    $query = "SELECT * FROM productos WHERE productos.id_producto=$idProducto";
    $resultado = mysqli_query($conexion, $query);
    
    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($conexion));
    }
    
    $producto = mysqli_fetch_assoc($resultado);    

    return $producto;
}

// Consulta los productos de la tienda sin incluir las imágenes.
function obtenerProductos()
{
    global $conexion; // Usamos la conexión global

    $query = "SELECT * FROM productos";

    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($conexion));
    }

    $productos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    

    return $productos;
}

// Consulta los productos junto con la primera imagen asociada a cada producto.
function obtenerProductosConImgs()
{
    global $conexion; // Usamos la conexión global

    // Consulta solo mostrará los productos que tengan imagen asociada
    $query = "SELECT p.id_producto, p.nombre_producto, p.precio_producto, ip.imagen_url
              FROM productos p, imagenes_productos ip 
              WHERE p.id_producto = ip.id_producto 
              GROUP BY p.id_producto";

    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($conexion));
    }

    $productos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexion);

    return $productos;
}

// Inserta un nuevo producto y devuelve el ID del producto insertado.
function insertarProducto($nombre, $descripcion, $precio)
{
    global $conexion;

    // Prepara la consulta
    $query = "INSERT INTO productos (nombre_producto, descripcion_producto, precio_producto) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssd", $nombre, $descripcion, $precio);
        mysqli_stmt_execute($stmt);

        $idProducto = mysqli_insert_id($conexion); // Obtiene el ID del último producto insertado

        mysqli_stmt_close($stmt);
        return $idProducto;
    } else {
        return "Error: " . mysqli_error($conexion);
    }
}

// Actualiza la informacion de un producto a traves de su ID
function actualizarProducto($nombre, $descripcion, $precio, $idProducto)
{
    global $conexion;

    // Prepara la consulta
    $query = "UPDATE productos SET nombre_producto = ?, descripcion_producto = ?, precio_producto = ? WHERE id_producto = ?";
    $stmt = mysqli_prepare($conexion, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssi", $nombre, $descripcion, $precio, $idProducto);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        return "Error: " . mysqli_error($conexion);
    }
}

// Elimina un producto a traves de su ID.
function eliminarProducto($idProducto)
{
    global $conexion;

    // Prepara la consulta
    $query = "DELETE FROM productos WHERE id_producto = $idProducto";

    if (mysqli_query($conexion, $query)) {
        echo 'Zapatilla eliminada correctamente';
    } else {
        echo "Error eliminando la zapatilla: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>