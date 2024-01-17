<?php
session_start();
session_destroy();
header("Location: ../../fitcento/index.php");
?>