<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	echo "Acesso ao bd_oleos";
    
	$sql = new RDFsys\DB\Sql();

	$results = $sql->select("SELECT * FROM tb_oleos");

	echo json_encode($results);

});

$app->run();

 ?>