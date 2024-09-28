<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="ccs/style.css">
</head>
<body>
    <div class="dive2">
        <h1>¡Resultados!</h1>
        <center>
            <img src="img/imagen1.avif" alt="bienvenidos">
        
        <h2>¡Bien hecho!</h2>

        <?php
            $name = $_POST['Name'];
            $age = $_POST['Age'];
            $city = $_POST['City'];
            $birthday = $_POST['Birthday'];
            $hobby = $_POST['Hobby'];

            echo '<p><b>Nombre:</b> '.$name.'</p>';
            echo '<p><b>Edad:</b> '.$age.'</p>';
            echo '<p><b>Ciudad:</b> '.$city.'</p>';
            echo '<p><b>Fecha de Nacimiento:</b> '.$birthday.'</p>';
            echo '<p><b>Pasatiempo:</b> '.$hobby.'</p>';
        ?>

        <div id="popUpOverlay"></div>
        <div id="popUpBox">
            <div id="box">
                <i class = "fas fa-question-circle fa-5x"></i>
                <h1> ¿Volver a ingresar datos? </h1>
                <div id="closeModal"></div>
            </div>
        </div>
        <button onclick="Alert.render('Tu te ves muy bien hoy.')" class="btn"> ¡Volver a Ingresar!</button>

        </center>
        <script src="js/app.js"></script>
    </div>
</body>
</html>