<?php

    session_start();

    if(isset($_REQUEST["submit"])){
        $username=$_REQUEST["username"];
        $email=$_REQUEST["email"];
        $password=$_REQUEST["password"];
        $confirmPass=$_REQUEST["confPass"];

        if($username=='' || $email=='' || $password=='' || $confirmPass==''){
            echo "Fillup every Field";
        }
        else{

            if($password==$confirmPass){
                $user=["email"=>$email, "username"=>$username, "password"=>$password];
                $_SESSION["users"]=$user;
                header("location: ../view/login.php");
            }
            
            else{
                echo "Password and Confirm password must be same";
            }
        }
    }


?>