<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $author = $_POST['author'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO crud (title, author, cost)
    VALUES ('$title', '$author', '$cost')";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Data insert successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <div class="container my-5">
    <form method = "post">
        <div class="mb-3">
            <label>Title :</label>
            <input type="text" class="form-control" placeholder ="Enter your Book Name" name ="title" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Author :</label>
            <input type="text" class="form-control" placeholder ="Enter author" name ="author" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Cost :</label>
            <input type="text" class="form-control" placeholder ="$100" name ="cost" autocomplete="off">
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

   </div>
  </body>
</html>