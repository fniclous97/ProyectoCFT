<h1>ACCEDER</h1>
<div>
    <form action="index.php"> 
        <hr>
        <label>Rut</label> <br>
        <input type="text" name="usuario"><br>
        <label>Contraseña</label> <br>
        <input type="password" name="usuario">
        <br><br>
        <input type="submit" value="Iniciar sesion">
        <input type="reset" value="Limpiar" class="btn btn-primary"><hr>
        
    </form>
    <a href="#" class="btn btn-secondary">Registrar</a>
    <a href="#" class="btn btn-secondary">Recuperas clave</a>
    <div>

        <?php
            $var = new Controlador;
            $var -> consultarConexion();
        ?>
    </div>
</div>