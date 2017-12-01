<?php

function compruebaParametros($parametros, &$error)
{
    if (empty($parametros)){
        throw new Exception;
    } // if (!(!empty($parametros)))
} // function compruebaParametros($parametros)

function compruebaNoNulo($op1, $op2, $operador, &$error)
{
    if (!($op1 != null && $op2 != null && $operador != null)){
        $error[] = 'Parametros invalidos';
        throw new Exception;
    } // if (!(isset($op1, $op2, $operador) && in_array($operador, OPERACIONES) && is_numeric($op1) && is_numeric($op2)))
} // function compruebaNoNulo($op1, $op2, $operador)

function compruebaOperador($operador, &$error)
{
    if (!preg_match('%^[+*/-]$%', $operador)){
        $error[] = 'El operador no es válido';
    } // if (!in_array($operador, OPERACIONES))
} // function compruebaOperador($operador, &$error)

function compruebaNumericos($op1, $op2, &$error)
{
    $bNoNumericos = in_array(false, filter_var_array([$op1, $op2], FILTER_VALIDATE_FLOAT), true);

    if ($bNoNumericos){
        $error[] = 'Los operandos deben ser numericos';
    } // if ($bNumericos)

} // function compruebaNumerico($op)

function compruebaPositivos($op1, $op2, &$error){
    if (!($op1 >= 0) && !($op2 >= 0)){
        $error[] = "Los operandos deben ser positivos";
    } // if (!($op >= 0))
} // function compruebaPositivo($op, &$error)

function compruebaErrores($error)
{
    if (!empty($error)){
        throw new Exception;
    } // if (!empty($error))
} // function compruebaErrores($error)

function mostrarErrores($errores)
{
    foreach ($errores as $v):?>
        <h3><?= $v ?></h3>
    <?php endforeach;
}

function selected(?string $operador, ?string $value)
{
    return ($operador === $value ? 'selected' : '');
} // function selected($operador, $value)

function optionSelect($aOpVal, $operador)
{
    for ($i = 0; $i < count($aOpVal); $i++):?>
        <option <?= selected($aOpVal[$i], $operador) ?> value=<?= "\"$aOpVal[$i]\"" ?>><?= $aOpVal[$i] ?></option>
    <?php endfor; // for ($i = 0; $i < count($aOperadores); $i++)

} // function optionSelect($aOperadores, $aValores)
