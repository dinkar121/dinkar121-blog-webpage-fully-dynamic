<?php
  include "dbcon.php";
 

  session_start();
  if(isset($_POST['submit'])){
  $title = $_POST['title'];
  $description =  $_POST['description'];
  $ldescription =  $_POST['ldescription'];
  $file =$_POST['file'];
  $date = date("d M, Y");
  $author = $_SESSION['id'];

  $file = $_FILES['file'] ['name'];
  $tempname = $_FILES['file'] ['tmp_name'];

    $file = "upload/".$file;

    move_uploaded_file($tempname,$file);
    "<img src='$file' height='100' width='100' />";

  $sql = "INSERT INTO post(title, description,ldescription,post_date,author,file)
          VALUES('{$title}','{$description}','{$ldescription}','{$date}',{$author},'{$file}');";

  
  if(mysqli_query($con, $sql)){
    header("location:add-post.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }
}

?>