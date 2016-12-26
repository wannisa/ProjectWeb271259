<?php session_start();
session_destroy();
header( "location: https://surasak.io/pawarisaclinic/" );
exit(0);
?>