<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once "config.php";

$sql = "SELECT * FROM bca";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0){
    echo " <Table cellspaning=0 border=1>";
    echo "<Thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Address</th>";
    echo "<th>Email</th>";
    
    echo "</tr>";
    
    echo "</Thead>";
    echo "<tbody>";
    echo "<tr>";    
while($row = mysqli_fetch_assoc($result))
{
$id=$row["id"];
$name=$row["name"];
$phone=$row["phone"];
$address=$row["address"];
$email=$row["email"];



echo "<td>".$id."</td>";
echo "<td>".$name."</td>";
echo "<td>".$phone."</td>";
echo "<td>".$address."</td>";
echo "<td>".$email."</td>";
echo "<td><a href='update.php?id=$id' title='Update'>Update</a></td>";
echo "</tr>";


}
echo "</tbody>";

echo"</Table>";
}
else{
    echo "Result 0";
}

mysqli_close($con);
?>


       </table>

    </body>
</html>