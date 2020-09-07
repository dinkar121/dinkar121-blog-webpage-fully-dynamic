<?php
include ('dbcon.php');


$id =$_GET['id']; 

$query ="select post.title,post.description,user.uname,post.file From post left join user on post.author=user.id where post.id=$id"; 
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
echo $user['uname'];


?>

<?php
  
  if(isset($_POST['update'])){

        $title = $_POST['title'];
        $description = $_POST['description'];
        $ldescription = $_POST['ldescription'];
        $file=$_POST['file'];


        $file = $_FILES['file'] ['name'];
        $tempname = $_FILES['file'] ['tmp_name'];

    $file = "upload/".$file;

    move_uploaded_file($tempname,$file);
    "<img src='$file' height='100' width='100' />";


      $query ="UPDATE post SET title = '$title',description = '$description',ldescription = '$ldescription',file='$file' WHERE id=$id";
      $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

      //if($fire)echo "data updated successfully.";
      if($fire) header("Location:view-post.php");

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
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $user['title'] ?>"  required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description:</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="description" value="<?php echo $user['description'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description:</label>
                    <textarea type="text" name="ldescription" class="form-control" id="exampleInputPassword1" placeholder="Long description" value="<?php echo $user['ldescription'] ?>" required></textarea>
                  </div>
                  <!--
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                -->
                File Upload:<input type="file" name="file" value="<?php echo $user['file'] ?>">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                	<input type="hidden" name="" value="<?php echo $user['id'] ?>">
                  <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->


<?php include "footer.php"?>
