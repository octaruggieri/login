<?php
    require_once("c://xampp/htdocs/login/head/head.php");
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
            <i class="fa-solid fa-user-plus user-icon"></i>
        </a>
    </div>
    <div class="titulo">
        Crea tu cuenta en DigiBom 
    </div>
    <!-- =============== CORREO ==================== -->
    <form action="store.php" method="POST"  class="col-3 login" autocomplate="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="correo" value="<?= (!empty($_GET['correo'])) ? $_GET['correo']: "" ?>" 
            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <!-- ============== CONTRASEÑA ================ -->
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" value="<?= (!empty($_GET['contraseña'])) ? $_GET['contraseña']: "" ?>" 
            class="form-control" id="password">
        </div>


        <!-- =========== CONFIRMAR CONTRASEÑA ================ -->
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Repite la Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña" value="<?= (!empty($_GET['confirmarContraseña'])) ? $_GET['confirmarContraseña']: "" ?>"
            class="form-control" id="password2">
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
            <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>

        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
        </div>
   </form>
   <div class="login col-3 mt-3">  
    Tienes una cuenta? <a href="login.php" style="text-decoration: none;">Inicia Sesion</a>
   </div>
</div>

<?php
    require_once("c://xampp/htdocs/login/head/footer.php")
?>