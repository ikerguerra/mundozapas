<?php include '../../config/conexion.php' ?>
<?php include '../../config/constantes.php' ?>
<?php include '../inc/_header.php' ?>
<?php include '../inc/_navigation.php' ?>

<?php include '../../controllers/productoControlador.php';

$idProducto = $_POST['id_producto'];

// Recogemos la información del producto seleccionado
$zapatilla = obtenerProductoController($idProducto);

// Recogemos las imágenes del producto
$imagenes = obtenerImgsPorProductoController($idProducto);
?>

<!-- Admin -->
<main class="py-5 bg-dark top-left bottom-left" id="admin">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">Administrador</h2>
            </div>
        </div>
        <div class="row mt-5">
            <ul class="nav nav-tabs" id="editarTabs" role="tablist">
                <!-- Pestaña Editar zapatilla -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="editar-tab" data-bs-toggle="tab" data-bs-target="#editar"
                        type="button" role="tab" aria-controls="editar" aria-selected="false">Editar
                        zapatilla</button>
                </li>
            </ul>
            <div class="tab-content" id="editarTabContent">
                <!-- Editar zapatilla -->
                <div class="tab-pane fade show active" id="editar" role="tabpanel" aria-labelledby="editar-tab">
                    <div class="container mt-5">
                        <h2>Editar zapatilla</h2>
                        <form id="actualizarForm" action="../../controllers/productoControlador.php" method="POST"
                            enctype="multipart/form-data">
                            <input type="hidden" name="accion" value="editar">
                            <input type="hidden" name="id_producto" value="<?= $idProducto ?>">
                            <div id="card-elemen" class="row g-3">
                                <div class="col-sm-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Nombre" value="<?= $zapatilla['nombre_producto'] ?>">
                                </div>

                                <div class="col-sm-6">
                                    <label for="precio" class="form-label">Precio</label>
                                    <input type="text" class="form-control" id="precio" name="precio"
                                        placeholder="Precio" value="<?= $zapatilla['precio_producto'] ?>">
                                </div>

                                <div class="col-12">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion"
                                        placeholder="Descripción"><?= $zapatilla['descripcion_producto'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Selecciona imágenes</label>
                                    <input class="form-control" type="file" name="formFileMultiple[]"
                                        id="formFileMultiple" multiple>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary" name="upload">Actualizar</button>
                        </form>
                        
                        <!-- Mostrar imágenes existentes -->
                        <div class="my-3">
                            <label class="form-label">Imágenes existentes</label>   
                            <div class="row">
                                <?php foreach ($imagenes as $imagen) { ?>
                                    <div class="col-sm-2">
                                        <img src="<?php echo MIURL;?>public/assets/img/<?= htmlspecialchars($imagen['imagen_url']) ?>" class="img-thumbnail" alt="<?= $zapatilla['nombre_producto'] ?>">
                                        <form id="deleteImgForm" action="../../controllers/imgsProductoControlador.php" method="POST" class="mt-2">
                                            <input type="hidden" name="accion" value="eliminar_imagen">
                                            <input type="hidden" name="id_imagen" value="<?= $imagen['id_imagen'] ?>">
                                            <input type="hidden" name="imagen_url" value="<?= $imagen['imagen_url'] ?>">
                                            <input type="hidden" name="id_producto" value="<?= $idProducto ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../inc/_footer.php' ?>