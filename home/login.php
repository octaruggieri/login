<?php
    require_once("c://xampp/htdocs/login/head/head.php");
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
            <i class="fa-solid fa-user user-icon"></i>
        </a>
    </div>
    <div class="titulo">
        Inicia Sesion en DigiBom 
    </div>
    <form action="verificar.php" method="POST"  class="col-3 login" autocomplate="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
            <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
   </form>
   <div class="login col-3 mt-3">  
    Nuevo en DigiBom? <a href="signup.php" style="text-decoration: none;">Crear una cuenta</a>
   </div>
</div>

<?php
    require_once("c://xampp/htdocs/login/head/footer.php")
?>