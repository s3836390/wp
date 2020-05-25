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

if ( empty( $_SESSION['cust'] || $_SESSION['movie'] || $_SESSION['seats'] )) {
     header('Location: index.php');
}
?>

</body>
</html>