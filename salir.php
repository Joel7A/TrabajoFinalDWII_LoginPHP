<?php
session_start();
session_destroy(); /* destruccion de la session inicializada */
header("Location: index.php");

?>