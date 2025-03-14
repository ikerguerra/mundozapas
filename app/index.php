<?php include 'config/constantes.php' ?>
<?php include 'config/conexion.php' ?>
<?php require('../app/views/inc/_header.php') ?>
<?php require('../app/views/inc/_navigation.php') ?>

<!--hero header-->
<main class="py-5 py-md-0 bg-hero" id="home">
    <div class="container">
        <div class="row vh-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h1 class="heading-black text-capitalize">Las mejores zapas del panorama</h1>
                <p class="lead py-3">¡Ya tenemos en stock las nuevas adidas Campus «Cloud White» x Bad Bunny!</p>
                <form action="<?php echo MIURL; ?>app/views/pages/productos.php" method="post">
                    <button class="btn btn-primary d-inline-flex flex-row align-items-center">
                        Ver productos
                        <em class="ml-2" data-feather="arrow-right"></em>
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
    
<?php require('../app/views/inc/_footer.php') ?>