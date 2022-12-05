<?php
include_once 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM crud WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$author=$row['author'];
$cost=$row['cost'];

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $author = $_POST['author'];
    $cost = $_POST['cost'];

    $sql = "UPDATE crud SET id=$id, title='$title', author='$author', cost='$cost'
    WHERE id = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo " update successfully";
        header('location:index.php');
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
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <div class="container my-5">
    <form method = "post">
        <div class="mb-3">
            <label>Title :</label>
            <input type="text" class="form-control" placeholder ="Enter your Book Name" name ="title" autocomplete="off"
            value=<?php echo $title;?>>
        </div>

        <div class="mb-3">
            <label>Author :</label>
            <input type="text" class="form-control" placeholder ="Enter author" name ="author" autocomplete="off"
            value=<?php echo $author;?>>
        </div>

        <div class="mb-3">
            <label>Cost :</label>
            <input type="text" class="form-control" placeholder ="$100" name ="cost" autocomplete="off"
            value=<?php echo $cost;?>>
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>

   </div>
  </body>
</html>