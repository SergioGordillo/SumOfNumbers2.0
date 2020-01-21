<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Básico 2 Formularios de PHP</title>
    <!-- Teniendo dos input de type number, recógelos vía POST, súmalos y muestra el resultado. Ahora utilizamos sesiones para mejorar el código -->
</head>
<body>

    <form method="post" action="tratamiento-datos.php">
        <label for="num1">Inserta el primer  número</label>
        <input type="number" id="num1" name="num1"/>

        <label for="num1">Inserta el segundo número</label>
        <input type="number" id="num2" name="num2"/>

        <input type="submit" name="enviar" value="sumar"/>
    </form>

    <p>
        <?php
            session_start(); 
            if(isset($_SESSION['resultado'])){ //Si la variable $_SESSION que tiene como parámetro resultado está definida y no es null entrará en el if
                echo $_SESSION['resultado'];
                session_destroy(); //Destruye toda la información registrada de la sesión actual
            }


        ?>


    </p>
    
</body>
</html>