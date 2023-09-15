<?php
    setcookie("username", "", time() - 60);
    setcookie("fullname", "", time() - 60);
    setcookie("role", "", time() - 60);

    header("Location:http://localhost/Health_Ora/loginn.php");
?>