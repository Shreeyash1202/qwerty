<?php

session_start();
echo "Logging you out...";
session_destroy();
header("Location: /main/qwerty/index.php");

?>