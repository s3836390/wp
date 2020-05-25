<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
      .A4page {
        background-color: grey;
    size: 21cm 29.7cm;
    margin: 5mm 45mm 30mm 10mm;
    
}
   </style> 
</head>
<body>
<?php
session_start();
include "tools.php";

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
$totalprice = number_format($total,2);
$myfile= fopen("bookings.txt","w");
$now = date('d/m h:i');
$cells = array_merge( 
 [ $now ],(array)$_SESSION['cust']['name']  ,(array)$_SESSION['cust']['email']  , (array)$_SESSION['cust']['phone'] , (array)$_SESSION['movie']['id'],(array)$_SESSION['movie']['day'],(array)$_SESSION['movie']['hour'], (array)$_SESSION['seats']['STA'] , (array)$_SESSION['seats']['STP'] , (array)$_SESSION['seats']['STC'] , (array)$_SESSION['seats']['FTA'] ,(array) $_SESSION['seats']['FTP'] ,(array) $_SESSION['seats']['FTC'] , 
 (array) $totalprice 
);

fputcsv ($myfile,$cells);
fclose($myfile);

?>

<section class="A4page">
<span style ="color:red ;font-size:50px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invoice </span> <br>
<span style ="font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number:&nbsp;00&nbsp;123&nbsp;456&nbsp;789</span> <br> <br>
<span style ="color:blue ;font-size:30px"> Movie:</span>
<span style ="color:green ;font-size:30px"> <?php echo $moviename; ?> </span>
<br><br>
<span style ="color:blue ;font-size:30px"> Time:</span>
<span style ="color:green ;font-size:30px"> <?php echo $fullday;echo ' '; echo $fullhour ?> </span>
<br> <br>
<table border='1'>
    <tr>
        <th style ="color:red">Seat Quality</th>
        <th style ="color:red">Seat Quality</th>
    </tr>
    <tr>
        <th>STA</th>
        <th><?php echo $_SESSION['seats']['STA'] ?></th>
    </tr>
    <tr>
        <th>STP</th>
        <th><?php echo $_SESSION['seats']['STP'] ?></th>
    </tr>
    <tr>
        <th>STC</th>
        <th><?php echo $_SESSION['seats']['STC'] ?></th>
    </tr>
    <tr>
        <th>FTA</th>
        <th><?php echo $_SESSION['seats']['FTA'] ?></th>
    </tr>
    <tr>
        <th>FTP</th>
        <th><?php echo $_SESSION['seats']['FTP'] ?></th>
    </tr>
    <tr>
        <th>FTC</th>
        <th><?php echo $_SESSION['seats']['FTC'] ?></th>
    </tr>
    <tr>
        <th colspan="2" >
            <span style ="color:red">Sub Total:</span>
            <span>$</span>
        <?php echo $totalprice ?>
    </th>
    </tr>
    <tr>
        <th colspan="2"> 
        <span style ="color:red">Tax(10%):</span>
            <span>$</span>
        <?php echo $totalprice*0.1 ?>
    </th>
    </tr>
    <tr>
        <th colspan="2"> <span style ="color:red">Grand Total:</span>
            <span>$</span>
        <?php echo $totalprice*1.1 ?>
    </th>
    </tr>
</table>

</section>

<section class='A4page'>
   <p style ="color:red ;font-size:30px"> Group Ticket</p>
   <table border='1'>
       <tr style ="color:red">
           <th>STA</th>
           <th>STP</th>
           <th>STC</th>
           <th>FTA</th>
           <th>FTP</th>
           <th>FTC</th>
       </tr>
       <tr>
           <th><?php echo $_SESSION['seats']['STA'] ?></th>
           <th><?php echo $_SESSION['seats']['STP'] ?></th>
           <th><?php echo $_SESSION['seats']['STC'] ?></th>
           <th><?php echo $_SESSION['seats']['FTA'] ?></th>
           <th><?php echo $_SESSION['seats']['FTP'] ?></th>
           <th><?php echo $_SESSION['seats']['FTC'] ?></th>
       </tr>
   </table>
</section>

</body>
</html>