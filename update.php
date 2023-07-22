
<?php
require_once "db_connect.php";

$id = $_GET['media_id'];
$result = mysqli_query($connect, "SELECT * FROM media WHERE media_id = '$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_POST["edit"])){
    $title = $_POST["title"];
    $image = $_POST["image"];
    $ISBN = $_POST["ISBN"];
    $description = $_POST["description"];
    $type = $_POST["type"];
    $author_first_name = $_POST["author_first_name"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];

    $sql = "UPDATE media SET title = '$title',
     image = '$image',
      ISBN = '$ISBN',
       description = '$description',
        type = '$type', author_first_name = '$author_first_name',
        publisher_name = '$publisher_name',
        publisher_address = '$publisher_address',
        publish_date = '$publish_date' WHERE media_id = '$id'";

    if(mysqli_query($connect, $sql)){
      echo "<h1 class='bg-warning text-center'>Record updated successfully</h1>";
      header("refresh: 3; url = index.php");
    } else {
      echo "Error updating record: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Document</title>
</head>
<body style="background-color: #dcbe87;">
<nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
  <div class="container-fluid p-3" style="background-color: #4e1d04;">
    <a class="navbar-brand pe-5" href="index.php">
      <img src="./images/American_Library_Association-logo-C053B6D846-seeklogo.com.png" alt="logo.png" width="100" height="100">
    </a>
    <button class="navbar-toggler border border-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav fs-3">
        <li class="nav-item pe-5">
          <a class="nav-link text-light active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item pe-5">
        <a class="nav-link text-light" href="create.php"> Create product </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="container my-5 border border-5 rounded-5 border-warning-subtle" style="background-color: #ad6a34;">
  <form method="post" class="d-flex flex-column align-items-center my-5 text-light fs-1">
    <label for="title">Title</label>
    <input class="rounded-3 border border-3 border-warning" style="width: 80%; height:50px; font-size: 22px; color: #4e1d04;" type="text" name="title" value="<?= $row["title"] ?>">
  <br>
    <label for="image">image</label>
    <input class="rounded-3 border border-3 border-warning" style="width: 80%; height: 50px;font-size: 22px; color: #4e1d04"  type="text" name="image" value="<?= $row["image"] ?>">
  <br>
    <label for="ISBN">ISBN</label>
    <input class="rounded-3 border border-3 border-warning" style="width: 80%; height: 50px;font-size: 22px; color: #4e1d04"   type="text" name="ISBN" value="<?= $row["ISBN"] ?>">
  <br>
    <label for="description">description</label>
    <input class="rounded-3 border border-3 border-warning" style="width: 80%; height: 50px;font-size: 22px; color: #4e1d04"  type="text" name="description" value="<?= $row["description"] ?>">
  <br>
    <label for="type">type</label>
    <input class="rounded-3 border border-3 border-warning" style="width: 80%; height: 50px;font-size: 22px; color: #4e1d04"   type="text" name="type" value="<?= $row["type"] ?>">
  <br>
    <label for="author_first_name">author first name</label>
    <input class="rounded-3 border border-3 border-warning" style="width: 80%; height: 50px;font-size: 22px; color: #4e1d04"  type="text" name="author_first_name" value="<?= $row["author_first_name"] ?>">
  <br>
    <label for="publisher_name">publisher name</label>
    <input class="rounded-3 border border-3 border-warning" style="width: 80%; height: 50px;font-size: 22px; color: #4e1d04"  type="text" name="publisher_name" value="<?= $row["publisher_name"] ?>">
  <br>
    <label for="publisher_address">publisher address</label>
    <input class="rounded-3 border border-3 border-warning" style="width: 80%; height: 50px;font-size: 22px; color: #4e1d04"  type="text" name="publisher_address" value="<?= $row["publisher_address"] ?>">
  <br>
    <label for="publish_date"> publish date</label>
    <input class="rounded-3 border  border-3 border-warning" style="width: 80%; height: 50px;font-size: 22px; color: #4e1d04"  type="text" name="publish_date" value="<?= $row["publish_date"] ?>">
  <br>
    
    <input class="btn btn-warning fs-3 w-25 text-dark" type="submit" name="edit" value="Edit">
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
