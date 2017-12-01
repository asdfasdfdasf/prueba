<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
    </head>
    <body>
        <?php
        $op1 = $op2 = $operador = null;

        extract($_REQUEST, EXTR_IF_EXISTS);

        if (isset($op1, $op2, $operador) && in_array($operador, ['+', '-', '*', '/']) && is_numeric($op1) && is_numeric($op2)):
            if ($op1 >= 0 && $op2 >= 0):?>
                <p><?= $op1 ?> <?= $operador ?> <?= $op2 ?> = <b> <?= eval("return " . "$op1 $operador $op2;") ?></b></p>
            <?php else: ?>
                <h3>Los operandos deben ser positivos</h3>
            <?php endif; ?>

        <?php else: ?>
            <h3>ERROR: Los 2 operandos deben existir, tener forma de número y un operador.</h3>
        <?php endif; ?>

    </body>
</html>
