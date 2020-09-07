<?php

include "dbcon.php";
if(isset($_POST['submit'])){

  


    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $uname= $_POST['uname'];
    $password= $_POST['password'];
    $role= $_POST['role'];
    $file =$_POST['file'];
    $about =$_POST['about'];
    

   
    $filename = $_FILES['file'] ['name'];
    $tempname = $_FILES['file'] ['tmp_name'];

    $file = "upload/" .$filename;

    move_uploaded_file($tempname, $file);
    "<img src='$file' height='100' width='100' />";
$q ="INSERT INTO user(fname,lname,uname,password,role,file,about) VALUES ('$fname','$lname','$uname','$password','$role','$file','$about')";

  
  $query =mysqli_query($con, $q);

  /*  if($query){
        ?>
        <script>
            alert("data inserted properly")
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted")
        </script>
        <?php
    }
    */
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
            <h1 class="m-0 text-dark">Add profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add profile</li>
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
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="" enctype="multipart/form-data" >
              
                <div class="card-body">
                  <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control" placeholder="fname" required>
        </div>
                  <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="lname">
                  </div>
                  <div class="form-group">
            <label>user name</label>
            <input type="text" name="uname" class="form-control" placeholder="user name" required>
        </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password:</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
      
        
        <div class="form-group">
            <label>Role:</label> <br>
            <select name="role" class="form-control" required>
             <option value="0" selected="selected">Admin</option>
             <option value="1">Normal</option>
             
             
             </select>
            
        </div>
        <div class="form-group">
                    <label for="">About:</label>
                    <input type="text" name="about" class="form-control" placeholder="About" required>
                  </div>

        
       
                  <div class="form-group">
                     File Upload:<input type="file" name="file">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->


<?php include "footer.php"?>