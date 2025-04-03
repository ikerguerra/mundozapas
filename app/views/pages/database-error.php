<?php include '../../config/constantes.php' ?>
<?php include '../inc/_header.php' ?>
<?php include '../inc/_navigation.php' ?>

<main class="py-5 bg-dark section-angle top-left bottom-left d-flex align-items-center" style="min-height: calc(100vh - 200px);">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">Error de Base de Datos</h2>
                <p class="text-muted lead">Lo sentimos, ha ocurrido un error al conectar con la base de datos.</p>
                <p class="text-muted">Por favor, inténtelo de nuevo más tarde o contacte con el administrador.</p>
                <a href="<?php echo MIURL; ?>" class="btn btn-primary">Volver al inicio</a>
            </div>
        </div>
    </div>
</main>

<?php include '../inc/_footer.php' ?>