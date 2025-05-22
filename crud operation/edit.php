//edit file
<?php
$con=mysqli_connect("localhost","root","","fye");
$id=$_REQUEST['id'];
$qry =mysqli_query ($con,"select * from student where id=$id");
while ($row=mysqli_fetch_array($qry))
{
?>
<form method="POST" action="update.php">
    ID:<input type="text" name="txtid" value="<?php echo $row[0];?>"><br>
    Name:<input type="text" name="txtnm" value="<?php echo $row[1];?>"><br>
 AdDress:<input type="text" name="txtadd" value ="<?php echo $row[2];?>"><br>
 City:<input type="text" name="txtct" value="<?php echo $row[3];?>"><br>
 <input type="submit" value="update">
</form>
<?php
}
?>