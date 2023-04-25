<?php 
// require "core/controllers/Calculator.php";
// require "core/models/Calculator.php";
require "vendor/autoload.php";

use controller\Calculator;
use model\Calculator as Model;
// $controller = new Calculator;
// $model = new Calculator;
// $controller = new controller\Calculator();
// $model = new model\Calculator();
$controller = new Calculator();
$model = new Model();

var_dump($model);
var_dump($controller);

// $host = 'localhost';
// $db   = 'calc';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// var_dump($dsn);
// try {
//    $pdo = new \PDO($dsn, 'root', '');
//    $pdo = $pdo->query("SELECT * FROM `history`");
//    var_dump($pdo->fetchAll());
// } catch (\PDOException $e) {
//     echo $e->getMessage();
// }