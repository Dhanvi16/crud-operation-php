<?php
$con=mysqli_connect("localhost","root","","fye");
$qry=mysqli_query($con,"select*from student");
echo "<table border>";
echo 
"<tr>
<th> id </th>
<th> name</th>
<th>address</th>
<th>city</th>
<th colspan=2> operation </th>
</tr>";
while($row=mysqli_fetch_array($qry))
{
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td><a href ='edit.php? id=$row[0]'>Edit</a></td>";
    echo "<td><a href='delete.php ? id=$row[0]'>Delect </a></td>";
}
echo "</table>";
echo "<a href=insert.php>Insert</a>";
?>


