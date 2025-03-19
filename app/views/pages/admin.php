<?php include '../../config/conexion.php' ?>
<?php include '../../config/constantes.php' ?>
<?php include '../inc/_header.php' ?>
<?php include '../inc/_navigation.php' ?>

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
                        type="button" role="tab" aria-controls="gestionar" aria-selected="true">Gestionar inventario</button>
                </li>
                <!-- Pestaña Insertar zapatilla -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="insertar-tab" data-bs-toggle="tab" data-bs-target="#insertar"
                        type="button" role="tab" aria-controls="insertar" aria-selected="false">Añadir zapatilla</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!-- Gestionar inventario zapatillas -->
                <div class="tab-pane fade show active" id="gestionar" role="tabpanel" aria-labelledby="gestionar-tab">
                    ...
                </div>

                <!-- Insertar zapatilla -->
                <div class="tab-pane fade" id="insertar" role="tabpanel" aria-labelledby="insertar-tab">
                    ...
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../inc/_footer.php' ?>