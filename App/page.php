<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= URL_PATH?>/Public/Assets/css/styles.css">
    <link rel="stylesheet" href="<?= URL_PATH?>/Public/Assets/css/calendar.css">
    <link rel="stylesheet" href="<?= URL_PATH?>/Public/Assets/css/evo-calendar.css">
    <link rel="stylesheet" href="<?= URL_PATH?>/Public/Assets/css/evo-calendar.min.css">
    <link rel="stylesheet" href="<?= URL_PATH?>/Public/Assets/css/evo-calendar.midnight-blue.css">
    <link rel="stylesheet" href="<?= URL_PATH?>/Public/bootstrap/css/bootstrap.min.css">
    <script src="<?= URL_PATH?>/Public/Assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="<?= URL_PATH?>/Public/Assets/js/evo-calendar.min.js"></script>
    <script src="<?= URL_PATH?>/Public/Assets/js/evo-calendar.js"></script>
    <script src="<?= URL_PATH?>/Public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="body-style">
    <?php
        /**
         * Con esto se carga el body completo de la página, de modo 
         * que todas las librerías son compartidas entre los diferentes
         * layouts del sistema
         */
        include_once($pageLayoutPath);

        if(isset($data['mensaje'])){
            include_once(VIEW_PATH.'Common/Message.component.php');
        }
    ?>
</body>
</html>