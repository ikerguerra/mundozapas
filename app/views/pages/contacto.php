<?php include '../../config/constantes.php' ?>
<?php include '../inc/_header.php' ?>
<?php include '../inc/_navigation.php' ?>

<!-- Contacto -->
<main class="py-5 bg-dark section-angle top-left bottom-left" id="contacto">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">Contacta con nosotros</h2>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <form action="../../functions/enviarCorreo.php" method="POST" class="form-contacto needs-validation" novalidate>
                <div class='d-flex row'>
                    <div class="mb-3 col-6">
                        <label htmlFor="inputNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder='Nombre' required>
                        <div class="invalid-feedback">
                            El campo nombre es obligatorio
                        </div>
                    </div>
                    <div class="mb-3 col-6">
                        <label htmlFor="inputApellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="inputApellido" name="inputApellido" placeholder='Apellido' required>
                        <div class="invalid-feedback">
                            El campo apellido es obligatorio
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label htmlFor="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder='email@email.com' required>
                    <div class="invalid-feedback">
                        El campo email es obligatorio
                    </div>
                </div>
                <div class="mb-3">
                    <label htmlFor="textAreaMensaje" class="form-label">Mensaje</label>
                    <textarea class='form-control' id="textAreaMensaje" name="textAreaMensaje" placeholder='Escribe tu mensaje'
                        rows="5" required></textarea>
                    <div class="invalid-feedback">
                        El campo mensaje es obligatorio
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">Tiendas</h2>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-6 mx-auto">
                <a href="tel:666555444">666555444</a>
                <a href="mailto:contacto@mundozapas.com">contacto@mundozapas.com</a>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <p class="form-label">Asturias</p>
                        <p>Montevil, 33211 Asturias, España</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="form-label">Madrid</p>
                        <p>C. Getafe, 28912 – Leganés, Madrid</p>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps?q=40.4531,-3.6883&output=embed" width="auto" height="auto"
                style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</main>

<?php include '../inc/_footer.php' ?>