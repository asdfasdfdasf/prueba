<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calcula</title>
    </head>
    <body>
        <?php
        require_once "auxiliar.php";

        $op1       = filter_input(INPUT_GET, 'op1', FILTER_VALIDATE_FLOAT);
        $op2       = filter_input(INPUT_GET, 'op2', FILTER_VALIDATE_FLOAT);
        $operador  = filter_input(INPUT_GET, 'operador');
        $resultado = null;
        $error     = [];

        try {
            compruebaParametros($_GET, $error);
            compruebaNoNulo($op1, $op2, $operador, $error);
            compruebaOperador($operador, $error);
            compruebaNumericos($op1,$op2, $error);
            compruebaPositivos($op1, $op2, $error);
            compruebaErrores($error);

            $resultado = eval("return " . "$op1 $operador $op2;");?>

            <p><?= htmlentities($op1) ?> <?= htmlentities($operador) ?> <?= htmlentities($op2) ?> = <b> <?= htmlentities($resultado) ?></b></p>

            <?php $op1 = $resultado;?>

        <?php
        } catch (Exception $e) {
            mostrarErrores($error);
        }
        ?>

        <form action="#" method="get">
            <label for="op1">Operando 1:</label>
            <input value="<?= $op1 ?>" type="number" id="op1" name="op1">
            <br>
            <label for="op2">Operando 2:</label>
            <input value="<?= $op2 ?>" type="number" id="op2" name="op2">
            <br>
            <label for="operador">Operador:</label>
            <select id="operador" name="operador">
                <?php optionSelect(OPERACIONES, $operador); ?>
            </select>

            <br><br>

            <input type="submit" value="Calcular">

            <div>
                <?php
                /*
                $error = [];

                try {
                    compruebaParametros($_GET, $error);
                    compruebaErrores();
                } catch (Exception $e) {

                }
                */
                ?>
            </div>

        </form>

    </body>
</html>
