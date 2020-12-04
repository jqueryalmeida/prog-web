#!/usr/bin/env php
<?php
	
	#---------------------------------------------------
	# PFW Framework
	# Programmer : Ariff Azmi, Hamim
	# Email      : ariff.azmi16@gmail.com
	# Blog    	 : ariffazmi.me
	#---------------------------------------------------
	#---------------------------------------------------
	# @version		Id: 13/12/2009 5:25AM
	# @package		PFW (PHP Framework Wizard)
	# @copyright		Copyright (C) 2016 All rights reserved.
	#---------------------------------------------------
	// error_reporting(0);
	require 'vendor/autoload.php';

	use App\Pfw\Database as DB;

	parse_str(implode('&', array_slice($argv, 1)), $_GET);

	$argv2 = $argv[2];

	extract($_GET);

	if (isset($makeController)){
		
		$handle = fopen( __DIR__."/Pfw/App/Controllers/".$argv[2].".php" , 'w+');
		$data =
"<?php

	namespace App\Controllers;
	
	use \App\Pfw\Main as App;
	use \App\Http\Request as Request;

	class $argv2{

		public function index(){

		}

		public function show(){

		}

		public function edit(){

		}


		public function update(){

		}

		public function destroy(){

		}
	}
?>";
		fwrite($handle, $data);
		fclose($handle);
		echo "\033[33m successfully create controller $argv2\n";
	}

	if (isset($createTable)) {
		
		$handleDatabase = fopen(__DIR__.'/Pfw/App/Migrations/'.$argv[2].".sql", 'w+');
		chmod(__DIR__."/Pfw/App/Migrations/".$argv[2].".sql", 0777);
		$contentDatabase =
"
CREATE TABLE $argv2(
	id int unsigned not null auto_increment primary key
)
";
 		fwrite($handleDatabase, $contentDatabase);
		fclose($handleDatabase);
		
		echo "\033[33m successfully create table $argv2\n";
		
	}


	if (isset($migrateTable)) {
		
		$handleExecute = fopen(__DIR__.'/Pfw/App/Migrations/'.$argv[2].".sql", "r");
		$contentsExecute = fread($handleExecute, filesize(__DIR__.'/Pfw/App/Migrations/'.$argv[2].".sql"));

		DB::db_connect()->query($contentsExecute);

		echo "\033[33m successfully migrate table $argv2\n";
	}

	if (isset($setServerEnv)) {
		
		$handleServerEnv = fopen(__DIR__.'/Pfw/App/Pfw/Server.php', "w+");

		$emptyServerVal = "''";
		$contentServerEnv =
"
<?php
define('SERVERLOCATION',".($argv[2] != 'null' && strlen($argv[2]) > 3 ? "'".$argv[2]."'" : $emptyServerVal).");
define('SERVERUSERNAME',".($argv[3] != 'null' && strlen($argv[3]) > 3 ? "'".$argv[3]."'" : $emptyServerVal).");
define('SERVERPASSWORD',".($argv[4] != 'null' && strlen($argv[4]) > 3 ? "'".$argv[4]."'" : $emptyServerVal).");
define('SERVERDATABASE',".($argv[5] != 'null' && strlen($argv[5]) > 3 ? "'".$argv[5]."'" : $emptyServerVal).");

";
		fwrite($handleServerEnv, $contentServerEnv);
		fclose($handleServerEnv);
		
		echo "\033[33m successfully setup server environment\n";
	}

	if (isset($setServerPath)) {
		
		$handleServerPath = fopen(__DIR__.'/Pfw/App/Pfw/Server.php', "a+");

		$emptyServerPathVal = "''";
		$contentServerPath =
"
define('SERVER_PATH',".($argv[2] != 'null' && strlen($argv[2]) > 3 ? "'".$argv[2]."'" : $emptyServerPathVal).");
";
		fwrite($handleServerPath, $contentServerPath);
		fclose($handleServerPath);
		
		echo "\033[33m successfully setup server path\n";
	}


	if (isset($dropTable)) {
		
		unlink(__DIR__."/Pfw/App/Migrations/".$argv[2].".sql");

		$dropTableStatement = "DROP TABLE $argv[2]";

		DB::db_connect()->query($dropTableStatement);

		echo "\033[33m successfully drop table $argv[2]\n";
	}

	if (isset($makeModel)) {
		
		$handleModel = fopen(__DIR__."/Pfw/App/Models/".$argv[2].".php" , 'w+');
		global $table;
		$dataModel =
"<?php
	
	namespace App\Models;
	
	use \App\Pfw\Model;

	class $argv2 extends Model{
		
		protected \$table = 'replace-your-table-name-here';

	}
?>";
		fwrite($handleModel, $dataModel);
		fclose($handleModel);
		echo "\033[33m successfully create model $argv2\n";
	}
?>
