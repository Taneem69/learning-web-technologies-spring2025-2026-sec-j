<?php

   session_start();

   unset($_SESSION["state"]);

   header("location: ../view/login.php");

   


?>