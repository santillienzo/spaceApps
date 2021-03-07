<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/nosotros.css">
    <link rel="stylesheet" href="style/portafolio.css">
    <link rel="stylesheet" href="style/servicio.css">
    <link rel="stylesheet" href="style/contacto.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="Images/ico.ico"><link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <title>Space Apps</title>
</head>
<body>
    <?php require 'partials/nav.php';?>
    <article>
        <section class="welcome-container">
            <div class="encabezado">
                <h2>La vida con una Web es más fácil.</h2>
                <p>Por eso Space te la diseña a tu medida.</p>
            </div>
        </section>
        
        <?php require 'partials/nosotros.php';?>

        <?php require 'partials/servicios.php';?>
        
        <?php require 'partials/portafolio.php';?>

        <?php require 'partials/contacto.php';?>
        

    </article>
</body>
</html>