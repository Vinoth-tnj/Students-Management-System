<?php
session_start();
session_unset();
session_destroy();
header('location:staff_login.php');

?>