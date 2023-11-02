<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= PUBLIC_PATH?>/Assets/css/styles.css">
    <script src="<?= PUBLIC_PATH ?>/Assets/js/scripts.js"></script>
</head>
<body>

    <?php
        include_once(PUBLIC_PATH."/header.html");
        // Se renderiza la vista (el contenido de la página)
        include_once($viewPath);

        include_once(PUBLIC_PATH."/footer.html");
    ?>
</body>
</html>