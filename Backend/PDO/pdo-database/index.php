<?php

define('DB_SERVER','localhost');
define('DB_NAME','testes');
define('DB_USER','root');
define('DB_PASS','root');

require_once ('sql_builder.php');
require_once ('pdodb.php');

//Conexão
$db = new PDOdb(DB_SERVER,DB_NAME,DB_USER,DB_PASS);
/*
//Insert
$name = 'Brasil2';
$population = 12000000;
$db->insert('countries', [$name, $population], 'name,population');
if ($db->execute())
    echo 'country was created. Id=' . $db->last_insert_id();
else
    echo 'insert failed: ' . $db->error_info();

//Update
$data = ['name'=>'Brasil2',
         'population'=>'1000'];
$db->where(['id', 12]); //OR $db->where('id=12');
$db->update ('countries', $data);
if ($db->execute())
    echo $db->row_count() . ' records were updated';
else
    echo 'update failed: ' . $db->error_info();

// Select com cento id
$db->where (["id", 5]);
$db->select('countries'); 
$countries = $db->fetch(); // contains an Array of all users
foreach($countries as $coun){
  print $coun['name'].'<br>';
}

$db->select('countries'); 
$users = $db->select('countries', 10); //contains an Array 10 users

// Select de alguns campos
$cols = "id,name";
$db->select("countries", $cols);
$cs = $users = $db->fetch();
foreach($cs as $coun){
  print $coun['id'].'-';
  print $coun['name'].'<br>';
}

// Select com limit
$keywords = [
    'limit'=>5,
    'order_by'=>'name',
    'offset'=>10,
    'group_by'=> '',
    'having'=> ''
];
*/
// Contar
$db->where (['id', [4, 20], 'between']);
$db->select('countries');
$c=$db->execute();
print_r($c);


