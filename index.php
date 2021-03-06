<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="index.php">
<label for="">ID</label>
<input type="text" name="id">
<label for="">Name</label>

<input type="text" name="name">
<label for="">Phone</label>

<input type="text" name="phone">
<label for="">Address</label>

<input type="text" name="address">

<label for="">Email</label>
<input type="text" name="email">

<button type="submit" name="save">Save</button>
</form>

<?php
if(isset($_POST["save"]))
{
    // echo "Saving";
    $id=$_POST["id"];
    $name=$_POST["name"];

    $phone=$_POST["phone"];

    $address=$_POST["address"];

    $email=$_POST["email"];

        $con = mysqli_connect("localhost","root","","student");

        if(!$con){
            echo 'Connection Failed';
        }
        $sql = "INSERT INTO bca (id,name,phone,address,email)
        VALUES ('$id', '$name','$phone','$address', '$email')";
if(mysqli_query($con,$sql))
{
    echo '"data inserted succesfully"';
}
else{
    echo '"data insert failed"' . mysqli_error($con);

}

}
?>

</body>
</html>