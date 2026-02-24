<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit'])){
      $title = htmlspecialchars($_POST['title']);
      $abstract = htmlspecialchars($_POST['abstract']);
      $researcher = htmlspecialchars($_POST['title']);
      $year = htmlspecialchars($_POST['year']);
      $type = htmlspecialchars($_POST['type']);
      $status = htmlspecialchars($_POST['status']);
    }
    else{
       header("location:../index.php");
    }
  else{
      echo "NO";
  }

    try {
      require_once "db.inc.php";

      $query1 = "SELECT id FROM research_type WHERE name= :type";
      $stmt1 = $pdo->prepare($query1);

      $stmt1->bindParam(":type", $type);
      $stmt1->execute();

      $type_id = $stmt1->fetch(PDO:);

      $pdo = null;
      $stmt1 = null;

      header("location:../index.php");

      die();
      $query = "INSERT INTO `research`(`title`, `research_type_id`, `abstract`, `researcher_name`, `status`) VALUES ()";
    } catch (PDOException $e) {
      echo $e;
    }
    
  }