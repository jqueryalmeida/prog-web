<?php

// Como exemplo vamos criar uma tabela com 1000 registros

require 'vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\pt_BR\Restaurant($faker));

ini_set('max_execution_time', '-1');// Ilimitados
ini_set('max_input_time', 120);// spt
ini_set('max_input_nesting_level', 64);//s
ini_set('memory_limit', '-1');//Ilimitada

$faker = Faker\Factory::create('pt_BR');
$faker->addProvider(new \FakerRestaurant\Provider\pt_BR\Restaurant($faker));

$clientes = "CREATE TABLE clientes (
    id int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50),
    nascimento date,
    vendedor_id int not null,
    CONSTRAINT `fk-vendedor` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedores` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
);
";

// Registros
$pedidos .= "INSERT INTO pedidos (data, quantidade, produto_id) VALUES \n";

for ($i=0; $i < 1000; $i++) {
		$nome = $faker->name;
		$email = $faker->email;
    $nascimento = $faker->date;
    $vendedor_id = $faker->numberBetween($min = 1, $max = 1000);

    if($i<1000){
        $clientes .= "('$nome','$email','$nascimento', '$vendedor_id'),\n";
    }else{
        $clientes .= "('$nome','$email','$nascimento', '$vendedor_id');\n";
    }
}

$fp = fopen("clientes.sql", "w");
fwrite($fp, $clientes);
fclose($fp);

print '<h3>Arquivo criado</h3>';
