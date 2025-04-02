<?php include '../../config/conexion.php' ?>
<?php include '../../config/constantes.php' ?>
<?php include '../inc/_header.php' ?>
<?php include '../inc/_navigation.php' ?>

<?php include '../../controllers/productoControlador.php';

$productos = obtenerProductosController();
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
            <ul class="nav nav-tabs" id="adminTabs" role="tablist">
                <!-- Pestaña Gestionar inventario zapatillas -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="gestionar-tab" data-bs-toggle="tab" data-bs-target="#gestionar"
                        type="button" role="tab" aria-controls="gestionar" aria-selected="true">Gestionar
                        inventario</button>
                </li>
                <!-- Pestaña Insertar zapatilla -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="insertar-tab" data-bs-toggle="tab" data-bs-target="#insertar"
                        type="button" role="tab" aria-controls="insertar" aria-selected="false">Añadir
                        zapatilla</button>
                </li>
            </ul>
            <div class="tab-content" id="adminTabContent">
                <!-- Gestionar inventario zapatillas -->
                <div class="tab-pane fade show active" id="gestionar" role="tabpanel" aria-labelledby="gestionar-tab">
                    <div class="container">
                        <div class="row mt-4">
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($productos as $producto) { ?>
                                        <tr>
                                            <th scope="row"><?= htmlspecialchars($producto['id_producto']) ?></th>
                                            <td><?= htmlspecialchars($producto['nombre_producto']) ?></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="stocksCheckbox10"
                                                        checked="">
                                                    <label class="form-check-label" for="stocksCheckbox10"></label>
                                                </div>
                                            </td>
                                            <td><?= htmlspecialchars($producto['precio_producto']); ?>€</td>
                                            <td>
                                                <form id="editarForm" action="adminEditar.php" method="POST"
                                                    class="needs-validation" novalidate="">
                                                    <input type="hidden" name="id_producto"
                                                        value="<?= $producto['id_producto'] ?>">
                                                    <button class="btn btn-form no-pointer" type="submit"><i
                                                            class="fa fa-edit"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <form id="deleteForm" action="../../controllers/productoControlador.php"
                                                    method="POST" class="needs-validation" novalidate="">
                                                    <input type="hidden" name="accion" value="eliminar">
                                                    <input type="hidden" name="id_producto"
                                                        value="<?= $producto['id_producto'] ?>">
                                                    <button class="btn btn-form no-pointer" type="submit"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Insertar zapatilla -->
                <div class="tab-pane fade" id="insertar" role="tabpanel" aria-labelledby="insertar-tab">
                    <div class="container mt-5">
                        <h2>Añadir zapatilla</h2>
                        <form action="../../controllers/productoControlador.php" method="POST"
                            enctype="multipart/form-data" class="needs-validation" novalidate>
                            <input type="hidden" name="accion" value="insertar">
                            <div id="card-elemen" class="row g-3">
                                <div class="col-sm-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Nombre" value="" required>
                                    <div class="invalid-feedback">
                                        El campo nombre es obligatorio
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="precio" class="form-label">Precio</label>
                                    <input type="text" class="form-control" id="precio" name="precio"
                                        placeholder="Precio" value="" required>
                                    <div class="invalid-feedback">
                                        El campo precio es obligatorio
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion"
                                        placeholder="Descripción" required></textarea>
                                    <div class="invalid-feedback">
                                        El campo descripción es obligatorio
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Selecciona imágenes</label>
                                    <input class="form-control" type="file" name="formFileMultiple[]"
                                        id="formFileMultiple" multiple required>
                                    <div class="invalid-feedback">
                                        Seleccionar al menos una imagen.
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="upload">Añadir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../inc/_footer.php' ?>