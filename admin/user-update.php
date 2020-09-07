<?php
include ('dbcon.php');


$id =$_GET['id']; 

$query ="select * From user where id=$id"; 
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
echo $user['fname']." ".$user['lname'];


?>

<?php
  
  if(isset($_POST['update'])){

        $fname =$_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $password =$_POST['password'];
        $file=$_POST['file'];


        $file = $_FILES['file'] ['name'];
        $tempname = $_FILES['file'] ['tmp_name'];

    $file = "upload/".$file;

    move_uploaded_file($tempname,$file);
    "<img src='$file' height='100' width='100' />";

        

      $query ="UPDATE user SET fname = '$fname',lname = '$lname',uname = '$uname',password = '$password',file='$file' WHERE id=$id";
      $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

      //if($fire)echo "data updated successfully.";
      if($fire) header("Location:view-user.php");

  } 



?>

<?php include "header.php"?>
<?php include "sidbar.php"?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration:</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form:</h3>

              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data">
        <div class="input-group mb-3">
          <br>
          <input type="text" class="form-control" value="<?php echo $user['fname'] ?>" name="fname" placeholder="First name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php echo $user['lname'] ?>" name="lname" placeholder="last name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control"value="<?php echo $user['uname'] ?>" name="uname" placeholder="user name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="test" class="form-control" value="<?php echo $user['password']?>" name="password" placeholder="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        File Upload:<input type="file" name="file" value="<?php echo $user['file'] ?>">
        
        
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>

            

          <!-- /.col -->
          
            <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
          
          <!-- /.col -->
        </div>
      </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->


<?php include "footer.php"?>