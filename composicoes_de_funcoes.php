<?php
function adicionar($valor1, $valor2) {
  return $valor1 + $valor2;
}
function dobrar($valor) {
  return $valor * 2;
}
$adicionar_e_dobrar = function ($valor1, $valor2) {
  return dobrar(adicionar($valor1, $valor2));
};
echo $adicionar_e_dobrar(6, 40); // retorno: 92
?>