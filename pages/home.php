<?php 

//$count = $pdo->exec("INSERT into articles SET title = 'my Title', date='". date('y-m-d H:i:s') ."'");
//var_dump($count);
//
//
//
// $stmt = $pdo->prepare('select * from articles');
// $stmt ->execute();
// $rows = $stmt->fetchAll();
// echo "<pre>";
// print_r($rows);
// echo "</pre>";
// $res = $pdo->query('select * from articles');
// var_dump($res->fetchAll(PDO::FETCH_OBJ));

$db = new App\Database('Blog');
$data = $db->query('Select * from articles');
var_dump($data);