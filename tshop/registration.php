<?php
session_start();

$con = mysqli_connect('localhost','root', '');
mysqli_select_db($con,'tshop_db' );
$username = $_POST['username'];
$password =$_POST['password'];
$email =$_POST['email'];

$query = "select *from accounts where username= '$username'";

$result =mysqli_query($con, $query);

$num = mysqli_num_rows($result);

if($num>0){
    ?>
    <script>
        window.alert("Username Already Taken!");
    </script>
    <meta http-equiv="refresh" content="1;url=register.php"/>
    <?php
}
else{
    $reg="insert into accounts(username,password,email) values ('$username', '$password', '$email')";
    mysqli_query($con,$reg);
    ?>
    <meta http-equiv="refresh" content="1;url=login.php" />
    <?php
}
?>