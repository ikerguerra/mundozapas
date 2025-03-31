<?php
require_once __DIR__ . '/../config/conexion.php';

// Consulta las imágenes asociadas a un producto
function obtenerImgsPorProducto($idProducto)
{
    global $conexion;

    // Recuperar las imágenes asociadas al producto
    $query_imgs = "SELECT * FROM imagenes_productos WHERE id_producto=$idProducto";
    $resultado_imgs = mysqli_query($conexion, $query_imgs);

    if (!$resultado_imgs) {
        die('Error en la consulta de imágenes: ' . mysqli_error($conexion));
    }

    $imagenes = mysqli_fetch_all($resultado_imgs, MYSQLI_ASSOC);

    return $imagenes;
}

// Inserta una imagen asociada a un producto en la base de datos.
function insertarImgsProductos($imagenUrl, $idProducto)
{
    global $conexion;

    // Prepara la consulta
    $query = "INSERT INTO imagenes_productos (imagen_url, id_producto) VALUES (?, ?)";
    $stmt = mysqli_prepare($conexion, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "si", $imagenUrl, $idProducto);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        return "Error: " . mysqli_error($conexion);
    }
}

// Elimina una imagen de la base de datos dado su ID.
function eliminarImgProducto($idImagen)
{
    global $conexion;

    // Prepara la consulta
    $query = "DELETE FROM imagenes_productos WHERE id_imagen = $idImagen";

    if (mysqli_query($conexion, $query)) {
        echo 'Imagen eliminada correctamente';
    } else {
        echo "Error eliminando la imagen: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}

?>