<?php

$con = mysqli_connect("localhost","root","","Login");
if(!$con){
    die('Connection Failed');
}
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['c_pass'];

    $sql_query = "insert into LoginTabel(email, pass, c_pass) values ($email, $pass, $c_pass); ";

    if($con, $sql_query)
    {
        echo "Success";
    }else{
        echo "Error";
    }
    mysqli_connect ($con);
}
?>
