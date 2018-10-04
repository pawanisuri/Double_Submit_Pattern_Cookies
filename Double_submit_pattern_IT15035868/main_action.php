<?php
    session_start();
    if ((isset($_POST['csrf_token']))&&(isset($_COOKIE["admin"]))&&(($_POST['csrf_token'])==$_COOKIE["admin"])){
        echo '<script type="text/javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';
        }
        else{
            echo '<script type="text/javascript">';
            echo 'alert("message not successful")';
            echo '</script>';
        }
        echo "<script> location.href='main.php'; </script>";
        
        
?>