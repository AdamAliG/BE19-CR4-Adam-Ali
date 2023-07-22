

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--BOOTSTRAP CSS -->
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
<!--BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<?php
    require_once "db_connect.php";

    $sql = "SELECT * FROM media"; 
    $result = mysqli_query($connect, $sql);
    $resultCheck = mysqli_num_rows($result);

    //DELETE BUTTON
if (isset($_POST['delete'])) {
        $id_to_delete = $_POST['id_to_delete'];

        $sql = "DELETE FROM media WHERE media_id = '$id_to_delete'";

        if (mysqli_query($connect, $sql)) {
            echo "<h1 class='bg-warning text-center'>Record deleted</h1>";

            header("refresh: 3; url = index.php");
        } else {
            echo "<h1 class='bg-warning text-center'>Error deleting record:</h1> " . mysqli_error($connect);
        }
    }

    echo "
          <h1 class='text-center p-4 text-dark'>Pick and edit a variety of media!</h1> 
          <div class='container'>
          <a href='create.php' class='btn btn-success mb-4'> Create product </a> 
          <div class='row justify-content-center'>";

    if($resultCheck > 0){
      while ($row = mysqli_fetch_assoc($result)){
        echo "
        
<div class='col-sm-12 col-md-5 col-lg-4 col-xl-4 col-xxl-3'>
    <div class='card mb-5 border border-warning border-2 rounded-4 text-light fw-semibold' style='background-color: #ad6a34;'>

  <img src= '{$row["image"]}' width= '200' class='card-img-top' alt='...'>

  <div class='card-body'>
    <h5 class='card-title fs-2'>Title: {$row["title"]}</h5>
    <p class='card-text fs-5'>Description: <br> <br>{$row["description"]}</p>
  </div>

  <ul class='list-group list-group-flush'>

    <li class='list-group-item text-light fs-5' style='background-color: #ad6a34 !important; border-bottom: 2px solid #ffc107 !important;'>ID: {$row["media_id"]} </li>

    <li class='list-group-item fs-5' style='background-color: #ad6a34 !important; border-bottom: 2px solid #ffc107'> 

    <a class='text-light fs-5' href='publisher.php?publisher_name={$row["publisher_name"]}'> Publisher: {$row["publisher_name"]}</a>
</li>
<li class='list-group-item text-light fs-5' style='background-color: #ad6a34 !important; border-bottom: 2px solid #ffc107'>Type: {$row["type"]}</li>

<li class='list-group-item text-light'style='background-color: #ad6a34 !important; border-bottom: 2px solid brown'>ISBN: {$row["ISBN"]}</li>

  </ul>
      <div class='card-body'>

        <a href='details.php?media_id={$row["media_id"]}' class='btn btn-warning'>Show Details</a>

        <a href='update.php?media_id={$row["media_id"]}' class='btn btn-dark'>Edit</a>
          <form method='post' style='display: inline-block;'>

               <input type='hidden' name='id_to_delete' value='{$row["media_id"]}'>
                <input type='submit' name='delete' value='Delete' class='btn btn-light'>

          </form>
          
      </div>
    </div>
</div>
";

      }
     } else {
        echo "<h1 class='bg-warning text-center'>No results</h1>";
      }
    
    echo "</div></div>";
?>
