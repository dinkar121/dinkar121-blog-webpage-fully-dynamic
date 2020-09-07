



<?php include "header.php"?>
    <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container" >
		    	 <?php
  include('dbcon.php');
  $id =$_GET['id']; 
  $q= "select * from post where id='$id'";
   $query = mysqli_query($con, $q);

  while ($result= mysqli_fetch_array($query)) {
    



  ?>
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo $result['title']; ?></h2>
				    <div class="meta mb-3"><span class="date">Published <?php echo $result['post_date']?></span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="https://made4dev.com">
				        	<img class="img-fluid" src="<?php echo $result['file']?>" alt="image" style="
    width: 800px;
    height: 400px;" ></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
				    </figure>
				    <p><?php echo $result['ldescription']; ?> </p>
				    
				    
				    
					</blockquote>
					
					
					
				    
				   
			    </div>
			    <?php
			}
			?>

			      
			   
				
				
		    </div><!--//container-->
	    </article>
	    
	    
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    

    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
   
    
       
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/blog.js"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>     
    

</body>
</html> 

