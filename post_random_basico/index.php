<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejemplo 1 de wp_ajax</title>
    </head>
    <body>
        <h1>Artículo aleatorio</h1>
        <input type="text" id="cantidadRandom" placeholder="Ingrese la cantidad de post a mostrar" />
        <button type="button" id="mostrarRandom">Mostrar post random</button>
        <div id="postRandom"></div>
        <div id="wp-ajax" data="<?php echo home_url('wp-admin/admin-ajax.php'); ?>"></div>
        <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/main.js"></script>
    </body>
</html>
