<div class="d-flex align-items-center" style="height: 100vh;">

    <div class=" container d-flex justify-content-center">
        <form class="row 
            d-flex 
            justify-content-center 
            border border-info rounded 
            col-lg-5 col-md-6 col-sm-9 
            m-3 p-4" method="POST" action="<?= URL_PATH ?>/Authentication/logUser">
            <h3 class="text-center">Iniciar sesión</h3>

            <div class="mt-3">
                <label class="form-label" for="username-field">Nombre de usuario:</label>
                <input class="form-control" type="text" name="username" id="username-field">
            </div>

            <div class="mt-3">
                <label for="password-field" class="form-label">Contraseña</label>
                <input class="form-control" type="password" name="password" id="password-field">
            </div>

            <div class="d-flex justify-content-center">
                <input type="submit" value="Iniciar Sesión" class="btn btn-primary my-4">
            </div>
                
            <p class="text-center">¿No has creato tu cuenta? <a href="<?=URL_PATH?>/Authentication/signin">Regístrate aquí</a></p>
        </form>
    </div>
</div>
</div>