<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
      <form action="includes/formhandler.php" method="post">
    <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title">
    </div>

    <div>
      <label for="abs">Abstract</label>
      <input type="text" name="abstract" id="abs">
    </div>

    <div>
      <label for="name">Researcher Name</label>
      <input type="text" name="researcher" id="name">
    </div>

    <div>
      <label for="year">Publication Year</label>
      <input type="year" name="year" id="year">
    </div>

    <div>
      <label for="type">Research Type</label>
      <input type="text" name="type" id="type">
    </div>

    <div>
      <label for="status">Status</label>
      <select name="status" id="status">
        <option value="draft">daft</option>
        <option value="publised">published</option>
      </select>
    </div>

    <div>
      <button type="submit" name="submit">Add research</button>
    </div>

  </form>

  </main>

  
</body>
</html>