<?php include '../../config/constantes.php' ?>
<?php include '../inc/_header.php' ?>
<?php include '../inc/_navigation.php' ?>

<!-- Marcas -->
<main class="py-5 bg-dark section-angle top-left bottom-left" id="productos">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">Marcas</h2>
                <p class="text-muted lead">Estas son todas nuestras marcas</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <a href="#">
                        <picture class="h-100">
                            <img class="card-img-top img-fluid"
                                src="<?php echo MIURL;?>public/assets/img/nike-logo.jpg" alt="Blog 1">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../inc/_footer.php' ?>