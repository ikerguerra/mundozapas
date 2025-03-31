<?php
require_once __DIR__ . '/../models/imgProductoModelo.php';

// Obtener imagen o imagenes asociadas a un producto
function obtenerImgsPorProductoController($idProducto)
{
    $imagenes = obtenerImgsPorProducto($idProducto);

    if (!$imagenes) {
        return []; // Retornar un array vacío si hay un error
    }

    return $imagenes;
}

// Inserta una o varias imagenes que haya seleccionado el usuario
function insertarImgsProductoController($idProducto)
{
    if (isset($_POST["upload"])) {
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/mundozapas/public/assets/img/";

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (!empty($_FILES["formFileMultiple"]["name"][0])) {
            foreach ($_FILES["formFileMultiple"]["tmp_name"] as $key => $tmpName) {
                $fileName = basename($_FILES["formFileMultiple"]["name"][$key]);
                $targetPath = $uploadDir . $fileName;

                if (move_uploaded_file($tmpName, $targetPath)) {
                    echo "<p class='text-success'>Archivo subido: <strong>$fileName</strong></p>";
                    insertarImgsProductos($fileName, $idProducto);
                } else {
                    echo "<p class='text-danger'>Error al subir el archivo: <strong>$fileName</strong></p>";
                }
            }
        } else {
            echo "<p class='text-warning'>No se seleccionaron archivos.</p>";
        }
    }
}

// Elimina la imagen asociada al producto de la BDD y de la carpeta de imagenes
function eliminarImgProductoController()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_imagen'])) {
        $id = $_POST['id_imagen'];
        $imagenUrl = $_POST['imagen_url'];

        eliminarImgProducto($id);

        // Borramos la imagen de la carpeta de almacenamiento
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/mundozapas/public/assets/img/";
        unlink($uploadDir . $imagenUrl);
    }
}

// Verifica si la solicitud es POST y si se envió la accion a realizar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion'])) {
    $accion = $_POST['accion'];

    switch ($accion) {
        case 'eliminar_imagen':
            eliminarImgProductoController();
            break;
    }
}
?>