<?php
session_start();
?>

<?php include "header.php"?>

    
    <div class="main-wrapper">
	    <section class="cta-section  py-5" style="    background-color: currentcolor;">
		    <div class="container text-center">
			    <h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
			    <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
		    </div><!--//container-->
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5">
		  <div class="container-fluid">
	    
	     <?php
  include('dbcon.php');

  $q= "select * from post ";
   $query = mysqli_query($con, $q);

  while ($result= mysqli_fetch_array($query)) {
    



  ?>
  					 
  						<div class="item mb-5">
			    
				    <div class="media" >
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php  echo 'admin/'. $result['file']?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html"><?php echo $result['title']; ?></a></h3>
						    <div class="meta mb-1"><span class="date">Published <?php echo $result['post_date']?></span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro"><?php echo $result['description']; ?></div>
						    <a class="more-link" href="blog-post.php?id=<?php echo $result['id'];?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->

			   <?php
			}
			?>
		
			   
</div>
			    
	   <?php include "footer.php"?>