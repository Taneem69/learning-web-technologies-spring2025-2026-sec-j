<?php

    session_start();

    if(isset($_REQUEST["submit"])){
        $username=$_REQUEST["username"];
        $password=$_REQUEST["password"];

        if($username==$_SESSION["users"]["username"] && $password==$_SESSION["users"]["password"]){
            $_SESSION["state"]=true;
            $_SESSION["username"]=$username;
            header("location: ../view/home.php");
        }

        else{
            echo"Wrong username or password";
        }
    }


?>