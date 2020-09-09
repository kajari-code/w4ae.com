<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['user_id']);
header('Location: index.php');
?>
© 2020 GitHub, Inc.