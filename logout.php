<?php
session_start();
session_unset();
session_destroy();

setcookie("session_username", "", time() - 3600 * 24 * 30, "/");
setcookie("session_password", "", time() - 3600 * 24 * 30, "/");

header("Location: ./login/login.php");
exit();
?>
