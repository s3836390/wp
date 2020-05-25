<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
include "tools.php";
preShow($_SESSION);

if ( empty( $_SESSION['cust']['name'] ||$_SESSION['cust']['email'] ||$_SESSION['cust']['phone'] ||$_SESSION['cust']['card'] ||$_SESSION['cust']['expirymonth'] ||$_SESSION['cust']['expiryyear'] || $_SESSION['movie']['id'] || $_SESSION['movie']['day'] ||$_SESSION['movie']['hour'] || 

($_SESSION['seats']['STA'] && $_SESSION['seats']['STP'] &&$_SESSION['seats']['STC'] &&$_SESSION['seats']['FTA'] &&$_SESSION['seats']['FTP'] &&$_SESSION['seats']['FTC']))) {
     header('Location: index.php');
}

?>

</body>
</html>