<h1>ACCEDER</h1>
<div>
    <form action="index.php"> 
        <fieldset>

            <label>Rut</label> <br>
            <input type="text" name="usuario"><br>
            <label>Contraseña</label> <br>
            <input type="password" name="usuario">
            <br><br>
            <input type="submit" value="Iniciar sesion" class="btn btn-primary">
            <input type="reset" value="Limpiar" class="btn btn-primary">
        </fieldset>
        
    </form>
    <a href="index.php?url=registrar">Registrar</a>
    <a href="#">Recuperar clave</a>



    <div>

        <?php
            $var = new Controlador;
            $var -> consultarConexion();
        ?>
    </div>
</div>