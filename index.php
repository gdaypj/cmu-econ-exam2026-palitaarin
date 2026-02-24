<?php
  try {
      require_once "db.inc.php";

      $query = "SELECT * FROM research JOIN research_type ON research.research_type_id = research_type.id";
      $stmt = $pdo->prepare($query);

      $stmt->execute();

      $results = $stmt->fetchAll(PDO:FETCH_ASSOC);
      $pdo = null;
      $stmt = null;

      die();
    } catch (PDOException $e) {
      echo "Failed: " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Research</h1>
  <?php 
  if(!empty($results)){?>
  <div>
    print_r($results);
  </div>

  <?php }
  ?>

  
</body>
</html>