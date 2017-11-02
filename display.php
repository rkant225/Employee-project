<head>
<style>
table {
    border: 1px solid black;
background-color: #f1f1a1;    
    
}
th {
    
     background-color:#a1f1d1;
}
td{
   background-color: #f1a1e1;

}
</style></head>
<h1>Total employees here are</h1>


<?php
include 'connect.php';
$sql="select * from employees";
$data=mysqli_query($conn,$sql) or die("Error while executing query");


echo "<table>";
echo "<tr> <th>ID</th>    <th>First Name</th>  <th>Last Name</th>   <th>Email ID</th>    </t>";
while($row=mysqli_fetch_array($data,MYSQLI_ASSOC))
{
echo "<tr><td>".$row['id']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['email']."</td>";
}
echo "</table>";

?>


<b>This was Lias of  your employees. </b>
