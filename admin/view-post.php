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
            <h1 class="m-0 text-dark">Display:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Post:</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>

                      
                      <th >Date</th>
                      <th >Author</th>
                      <th >action</th>
                      <th>file</th>
                    </tr>
                  </thead>
                  <?php
  include('dbcon.php');

  if($_SESSION["role"] == '0'){
                    /* select query of post table for admin user */
                    $sql = "SELECT post.id, post.title, post.description,post.post_date,
                    user.uname,post.file,post.ldescription FROM post
                    
                    LEFT JOIN user ON post.author = user.id
                    ORDER BY post.id DESC ";
                  }elseif($_SESSION["role"] == '1'){
                    /* select query of post table for normal user */
                    $sql = "SELECT post.id, post.title, post.description,post.post_date,
                    user.uname,post.file FROM post
                    
                    LEFT JOIN user ON post.author = user.id
                    WHERE post.author = {$_SESSION['id']}
                    ORDER BY post.id DESC ";
                  }
              $query = mysqli_query($con, $sql);

            while($result= mysqli_fetch_array($query)) {
    



                ?>
                  <tbody>
                    <tr>
                      <td><?php echo $result['id']?></td>
                      <td><?php echo $result['title']; ?></td>
                      

                      
                      <td><?php echo $result['post_date']?></td>
                      <td><?php echo $result['uname']; ?></td>
                      <td><img class="b" src="<?php echo $result['file']?>"></td>
                      <td><a href="update-post.php?id=<?php echo $result['id'];?>">Update</a>~
    <a href="post-delete.php?id=<?php echo $result['id'];?>">Delete</a></td>
                      
                    </tr>
                   
                  </tbody>
                    <?php
    }
  ?>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->





</section>






 

 </div><!--end-->   





<?php include "footer.php"?>