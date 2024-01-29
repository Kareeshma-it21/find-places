<?php
    
$host ="localhost";
$user="root";
$password="";
$db_name ="findplaces";
$con= mysqli_connect($host,$user,$password,$db_name);
    

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $Firstname = $_POST['firstname'];
        $Email = $_POST['email'];
        $Phonenumber = $_POST['phone'];

        if(!empty($Firstname) && !empty($Email) && !is_numeric($Phonenumber))
        {
            $query ="insert into local(firstname,email, phone) values('$Firstname','$Email','$Phonenumber')";

            mysqli_query($con, $query);

            echo readfile("second.html");
        }
    else
    {
            echo "<script type='text/javascript'> alert('Please enter some valid Information ')</script>";
    }
    }
?>