<meta charset="UTF-8">
<?php
session_start();
session_unset();
session_destroy();
header('location:index.php');
?>
