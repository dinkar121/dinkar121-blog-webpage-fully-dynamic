<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM user WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:view-user.php');


?>