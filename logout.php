<?php
session_start();
if (isset($_SESSION['role'])) {  //session exists
    session_destroy();
    header("Location: index.php");    
} else {
    //TODO: decide how to treat this case.
    header("Location: login.php");    
}
