<?php  
$con = mysqli_connect("localhost","root","","student");

if(!$con)
{
    echo "connection faliled",mysqli_error();
}

$ids = $_GET["id"];

echo "$ids";

$sql =" DELETE FROM bca WHERE id='$ids'";

if(mysqli_query($con,$sql))
{
    echo "User Deleted";
}
else{
    echo "Failed to delete user";
}

?>