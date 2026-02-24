<?php
 $db = "mysql:host=localhost;dbname=research";
 $dbusername ="root";
 $dbpwd = "";

 try {
  $pdo = new PDO(
    $db,
    $dbusername,
    $dbpwd
  );
  $pdo->setAtrribute(PDO::ATTR_ERRMODE, PDP::ERRMODE_EXCEPTION);
 } catch (PDOException $e) {
    echo "Failed Connection: ". $e->getMessage();
}


