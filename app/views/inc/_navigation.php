<!--navigation-->
<header class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand heading-black" href="<?php echo MIURL; ?>public">
                Mundo Zapas
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- Menú de navegación -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll"
                            href="<?php echo MIURL; ?>public">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll"
                            href="<?php echo MIURL; ?>app/views/pages/productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo MIURL; ?>app/views/pages/marcas.php">Marcas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll"
                            href="<?php echo MIURL; ?>app/views/pages/contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>