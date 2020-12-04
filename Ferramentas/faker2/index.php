<?php

// Como exemplo vamos criar uma tabela com 1000 registros
/*
require 'vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\pt_BR\Restaurant($faker));

ini_set('max_execution_time', '-1');// Ilimitados
ini_set('max_input_time', 120);// spt
ini_set('max_input_nesting_level', 64);//s
ini_set('memory_limit', '-1');//Ilimitada

$faker = Faker\Factory::create('pt_BR');
$faker->addProvider(new \FakerRestaurant\Provider\pt_BR\Restaurant($faker));

$clientes = "CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `vendedor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vendedor_id` (`vendedor_id`),
  CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedors` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

// Registros
$clientes .= "INSERT INTO clientes (nome, email,nascimento, vendedor_id) VALUES \n";

$faker->foodName();      // Um nome de alimento aleatório
$faker->beverageName();  // Um nome de bebida aleatório
$faker->dairyName();  // Um nome de laticínio aleatório
$faker->vegetableName();  // Um nome de vegetal
$faker->fruitName();  // Um nome de fruta
$faker->meatName();  // Um nome de carne
$faker->sauceName();  // Um nome de molho

for ($i=0; $i < 1000; $i++) {
		$nome = addslashes($faker->name);
		$email = $faker->foodName();
    $nascimento = $faker->date;
    $vendedor_id = $faker->numberBetween($min = 1, $max = 1000);

    if($i<999){
        $clientes .= "('$nome','$email','$nascimento', '$vendedor_id'),\n";
    }else{
        $clientes .= "('$nome','$email','$nascimento', '$vendedor_id');\n";
    }
}
*/

//$fp = fopen("clientes.sql", "w");
//fwrite($fp, $clientes);
//fclose($fp);
require 'customers.php';
//print '<h3 align="center">Arquivo criado</h3>';
