<?php

$con = mysqli_connect("localhost","root","","Login");
if(!$con){
    die('Connection Failed');
}
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql_query = "insert into LoginTabel(email, pass) values ($email, $pass); ";

    if($con, $sql_query)
    {
        echo "Success";
    }else{
        echo "Error";
    }
    mysqli_connect ($con);
}
?>
