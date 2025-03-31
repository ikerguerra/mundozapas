<?php include '../../config/conexion.php' ?>
<?php include '../../config/constantes.php' ?>
<?php include '../inc/_header.php' ?>
<?php include '../inc/_navigation.php' ?>

<?php
include '../../controllers/productoControlador.php';

$productos = obtenerProductosConImgsController();
?>

<!-- Productos Tienda -->
<main class="py-5 bg-dark section-angle top-left bottom-left" id="productos">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">Productos disponibles</h2>
                <p class="text-muted lead">Estas son todas nuestras zapas lokete</p>
            </div>
        </div>
        <div class="row mt-5">
            <?php foreach ($productos as $producto) { ?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <picture class="h-100">
                                <img class="card-img-top img-fluid"
                                    src="<?php echo MIURL; ?>public/assets/img/<?php echo $producto['imagen_url']; ?>"
                                    alt="<?php echo $producto['nombre_producto']; ?>">
                            </picture>
                        </a>
                        <div class="card-body d-flex flex-column align-items-start">
                            <a href="#" class="card-title mb-2">
                                <h5><?= $producto['nombre_producto']; ?></h5>
                            </a>
                            <p class="text-muted small-xl mt-auto"><?php echo $producto['precio_producto']; ?> €</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php include '../inc/_footer.php' ?>