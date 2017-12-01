<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Saluda</title>
    </head>
    <body>
        <?php
        $nombre     = null;
        $apellidos  = '';

        extract($_GET, EXTR_IF_EXISTS);

        if ($nombre != null):?>
            <p>¡Hola <?= $nombre ?>! ¡Tu apellido es<?= ($apellidos != '' ? ' '.$apellidos : '') ?>!</p>
        <?php else:?>
            <h3>Error, no existe el nombre</h3>
        <?php endif; ?>

    </body>
</html>
