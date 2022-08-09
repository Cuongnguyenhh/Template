<?php
session_start();
session_unset();
header('Location: http://localhost/Templete/view/index.php');
?>