<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= URL_PATH?>/Public/Assets/css/styles.css">
    <link rel="stylesheet" href="<?= URL_PATH?>/Public/bootstrap/css/bootstrap.min.css">
    <script src="<?= URL_PATH?>/Public/Assets/js/scripts.js"></script>
    <script src="<?= URL_PATH?>/Public/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        /**
         * Con esto se carga el body completo de la página, de modo 
         * que todas las librerías son compartidas entre los diferentes
         * layouts del sistema
         */
        include_once($pageLayoutPath);
    ?>
</body>
</html>