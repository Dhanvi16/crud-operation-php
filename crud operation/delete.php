<?php
$con=mysqli_connect("localhost","root","","fye");
$q=$_REQUEST['id'];
$qry=mysqli_query($con,"delete from student where id=$q");
if($qry)
{
    echo "<script>alert ('deleted');</script>";
  header("location:display.php");
}
else{
    echo "<script>alert ('not  deleted');</script>";
     header("location:display.php");
}
?>