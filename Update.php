<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// require_once "config.php";

$con = mysqli_connect("localhost","root","","student");

if(!$con)
{
    echo "connection faliled",mysqli_error();
}

$ids = $_GET["id"];

echo "$ids";

$sql =" SELECT * from bca WHERE id='$ids'";

$mydata = mysqli_query($con,$sql);


$ardata = mysqli_fetch_array($mydata);

// print_r($ardata);

?>


<form method="POST" action="">
<label for="" >ID</label>
<input type="text" value="<?php echo $ardata["id"]; ?>" name="id">
<label for="">Name</label>

<input type="text" value="<?php echo $ardata["name"]; ?>" name="name">
<label for="">Phone</label>

<input type="text" name="phone" value="<?php echo $ardata["phone"]; ?>">
<label for="">Address</label>

<input type="text" name="address" value="<?php echo $ardata["address"]; ?>">

<label for="">Email</label>
<input type="text" name="email" value="<?php echo $ardata["email"]; ?>">

<button type="submit" name="save">Update</button>
</form>
    </table>
<?php

if(isset($_POST["save"]))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    

$con = mysqli_connect("localhost","root","","student");

if(!$con)
{
    echo "connection faliled",mysqli_error();
}


$query = "UPDATE bca SET name='$name',phone='$phone',address='$address',email='$email' WHERE id='$id'";

// $fetchingquery = mysqli_query($con,$query);

if( mysqli_query($con,$query))
{
    echo "Updated succesfully";
}
else{
    echo mysqli_error($con);
}


}

?>

</body>
</html>