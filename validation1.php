<?php

session_start();

$con=mysqli_connect('localhost','root','Password@2000');
if($con){
    echo " connection succesful";

}
else{
    echo "no connection";
}
mysqli_select_db ($con,'menti');

$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from signin where user = '$name' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['username']=$name;
    header('location:presentation.php');

}
else{
    header('location:login.php');

}
?>
