<?php

 session_start();
 
 ?>

<?php include "header.php"?>
<?php include "sidbar.php"?>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ADD POST:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add post:</li>
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
            <div class="col-md-.2">
            </div>
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD POST:</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="save-post.php" style="padding-bottom: 50px">
        <div class="form-group">
            <br>
            <label>title:</label>
            <input type="text" name="title" class="form-control" placeholder="title" required>
        </div>
        
        <div class="form-group">
            <label for="email">Description:</label>
            <textarea type="text" name="description" class="form-control" placeholder="Decription" required=""></textarea>
        </div>
         <div class="form-group">
            <label for="email">long Description:</label>
            <textarea type="text" name="ldescription" class="form-control" placeholder="long Decription" required></textarea>
        </div>
        
        
        File Upload:<input type="file" name="file">

        <br>
        <br>



        
        <input type="submit" name="submit" class="btn btn-info" value="submit">
        


    </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->

    
  
<?php include "footer.php"?>