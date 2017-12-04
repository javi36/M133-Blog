<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 30.11.2017
 * Time: 13:31
 */
//zerstört anmeldung und kehrt zurück.
session_destroy();
header('Location: index.php?function=login');

?>