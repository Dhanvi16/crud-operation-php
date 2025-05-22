<?php
$con=mysqli_connect("localhost","root","","fye");
$nm=$_POST['txtnm'];
$add=$_POST['txtadd'];
$ct=$_POST['txtct'];
$qry=mysqli_query($con,"insert into student(name,address,city)
values('$nm','$add','$ct')");
if($qry){
    echo "<script>alert ('inserted');</script>";
    header ("location:display.php");
}
else{
    echo "<script>alert('not inserted');</script>";
    header ("location:display.php");
}
?>