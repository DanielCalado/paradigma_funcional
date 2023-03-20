<?php
function calcular_area_circulo($raio) {
    return pi() * pow($raio, 2);
}
function ordenar_numeros_pura($numeros) {
    $copia = $numeros;
    sort($copia);
    return $copia;
}
?>