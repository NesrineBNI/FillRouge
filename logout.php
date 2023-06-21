<?php 
session_start();
// vider les variables de session
session_unset(); 
// détruire le session
session_destroy();

header("Location: login.php");
exit;