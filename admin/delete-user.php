<?php
 if($_SESSION["user_role"] == '0'){
    header("Location: http://localhost:8000/news-site/admin/post.php");
  }

include "config.php";

$userid=$_GET['id'];

$sql="DELETE FROM user WHERE user_id={$userid}";

if(mysqli_query($conn,$sql))
{
    header("Location: http://localhost:8000/news-site/admin/users.php");
}
else
{
    echo '<h1><marquee>can"t delete please try again</marquee></h1>';
}

mysqli_close($conn);

?>