<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <nav>
        <?php  require './view/modulos/menu.php' ?>
    </nav>


    <div>
        <?php 
            $mvc = new Controlador;
            $mvc -> controladorEnlaces();
            

        ?>
    </div>


</body>
</html>