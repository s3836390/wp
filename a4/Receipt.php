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


if (isFullorDiscount($day,$hour) == 'Discount') {
    $total = 
    $_SESSION['seats']['STA'] * 14 +
    $_SESSION['seats']['STP'] * 12.5+
    $_SESSION['seats']['STC'] * 11+
    $_SESSION['seats']['FTA'] * 24+
    $_SESSION['seats']['FTP'] * 22.5+
    $_SESSION['seats']['FTC'] * 21; 
}
else {
    $total = 
    $_SESSION['seats']['STA'] * 19.8 +
    $_SESSION['seats']['STP'] * 17.5+
    $_SESSION['seats']['STC'] * 15.3+
    $_SESSION['seats']['FTA'] * 30+
    $_SESSION['seats']['FTP'] * 27+
    $_SESSION['seats']['FTC'] * 24; 
}

$myfile= fopen("bookings.txt","w");
$now = date('d/m h:i');
$cells = array_merge( 
 [ $now ],$_SESSION['cust']['name']  ,$_SESSION['cust']['email']  , $_SESSION['cust']['phone'] , 
 $_SESSION['movie']['id'],$_SESSION['movie']['day'],$_SESSION['movie']['hour'], 
 $_SESSION['seats']['STA'] , $_SESSION['seats']['STP'] , $_SESSION['seats']['STC'] , $_SESSION['seats']['FTA'] , $_SESSION['seats']['FTP'] , $_SESSION['seats']['FTC'] , 
 (array) $total 
);

fputcsv ($myfile,$cells);
fclose($myfile);

?>

</body>
</html>