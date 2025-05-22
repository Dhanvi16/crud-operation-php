//update file
<?php
$con=mysqli_connect("localhost","root","","fye");
$id=$_POST['txtid'];
$nm=$_POST['txtnm'];
$add=$_POST['txtadd'];
$ct=$_POST['txtct'];
$qry=mysqli_query($con,"update student set name='$nm', address='$add', city='$ct' where id=$id");
if($qry)
{
     echo "<script>alert ('inserted');</script>";
     require("display.php");
    
}
else{
    echo "<script>alert (' not inserted');</script>";
}
?>