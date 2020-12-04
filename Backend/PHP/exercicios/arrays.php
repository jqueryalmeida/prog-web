<?php
/*
Array/matriz - � um mapa ou conjunto ordenado de pares de chaves e valores.

Uma chave � como um �ndice
Um valor � como uma vari�vel

Array vazio

$ar = array();

Fun��es nativas do PHP para arrays:

is_array() - checar se uma vari�vel cont�m um array e retorna true ou false.

https://phpro.org/tutorials/Introduction-To-Arrays.html
*/
$a = array("a" => "ma��", "b" => "banana");
$b = array("a" =>"p�ra", "b" => "framboesa", "c" => "morango");

$c = $a + $b; // Uniao de $a e $b
echo "Uni�o de \$a e \$b: <br>";
var_dump($c);

$c = $b + $a; // Uni�o de $b e $a
echo "<br><br>Uni�o de \$b e \$a: <br>";
var_dump($c);

/*
A partir da vers�o 5.4 do PHP podemos trabalhar com arrays assim:

$arr = [];

$arr = [0=>'zero', 1=>'um'];
*/
