<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM post WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:view-post.php');


?>