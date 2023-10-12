<?php 
    require_once("c://xampp/htdocs/login/head/head.php");
    
?>

<div class="fondo_menu">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Digibom</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- =================== VISTA DE USUARIO NUEVO ================= -->
                <?php if(empty($_SESSION['usuario'])): ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SOPORTE</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                MEMBRESIAS
                            </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">BASICA</a></li>
                            <li><a class="dropdown-item" href="#">MEDIUM</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">FULL</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                        <a href="/login/home/login.php" class="boton">Inicia Sesion</a>
                        <a href="/login/home/signup.php" class="boton">Registrate</a>
                </div>
                <!-- ================ VISTA DE USUARIO LOGUEADO ================= -->
                <?php else: ?>   
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MIS QRS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                MEMBRESIAS
                            </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">BASICA</a></li>
                            <li><a class="dropdown-item" href="#">MEDIUM</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">FULL</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                        <a href="/login/home/logout.php" class="boton">Cerrar Sesion</a>
                </div>
                <?php endif ?> 
            </div>
        </nav>
    </div>
</div>

<div class="fondo">

