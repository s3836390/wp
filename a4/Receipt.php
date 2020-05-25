<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
      .A4page {
        border-style: double solid;
        background-color: grey;
    size: 21cm 29.7cm;
    margin: 5mm 100mm 10mm 10mm;}

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

<section class="A4page" >
<img src="ticketicon.jpg" width="500" height="455" alt="ticket logo" style='float:right'>
<span style ="color:red ;font-size:50px"> Invoice </span> <br>
<span style ="font-size:30px">Number:&nbsp;00&nbsp;123&nbsp;456&nbsp;789</span> <br> <br>
<span style ="color:blue ;font-size:30px"> Movie:</span>
<span style ="color:green ;font-size:30px"> <?php 
if ($_SESSION['movie']['id'] ='ACT'){echo 'Avengers: Endgame';} 
if ($_SESSION['movie']['id'] ='RMC'){echo 'Top End Wedding';} 
if ($_SESSION['movie']['id'] ='ANM'){echo 'Dumbo';} 
if ($_SESSION['movie']['id'] ='AHF'){echo 'The Happy Prince';} 

?> </span>
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
<img src="ticketicon.jpg" width="500" height="193" alt="ticket logo" style='float:right'>
<br><br><br>  
<span style ="color:green ;font-size:30px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Group Ticket</span>
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
   <br><br><br>
</section>

<?php   
  for($countSTA=1;$countSTA <= $_SESSION['seats']['STA'];$countSTA++){
      echo '<section class="A4page">
      <img src="ticketicon.jpg" width="500" height="156" alt="ticket logo" style="float:right">
      <p style ="color:green ;font-size:30px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Individual Ticket</p>
      <p style ="color:red ;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; STA </p>
      </section>';

}
for($countSTP=1;$countSTP <= $_SESSION['seats']['STP'];$countSTP++){
    echo '<section class="A4page">
    <img src="ticketicon.jpg" width="500" height="156" alt="ticket logo" style="float:right">
    <p style ="color:green ;font-size:30px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Individual Ticket</p>
    <p style ="color:red ;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; STP </p>
    </section>';

}
for($countSTC=1;$countSTC <= $_SESSION['seats']['STC'];$countSTC++){
    echo '<section class="A4page">
    <img src="ticketicon.jpg" width="500" height="156" alt="ticket logo" style="float:right">
    <p style ="color:green ;font-size:30px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Individual Ticket</p>
    <p style ="color:red ;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; STC </p>
    </section>';

}
for($countFTA=1;$countFTA <= $_SESSION['seats']['FTA'];$countFTA++){
    echo '<section class="A4page">
    <img src="ticketicon.jpg" width="500" height="156" alt="ticket logo" style="float:right">
    <p style ="color:green ;font-size:30px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Individual Ticket</p>
    <p style ="color:red ;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FTA </p>
    </section>';

}
for($countFTP=1;$countFTP <= $_SESSION['seats']['FTP'];$countFTP++){
    echo '<section class="A4page">
    <img src="ticketicon.jpg" width="500" height="156" alt="ticket logo" style="float:right">
    <p style ="color:green ;font-size:30px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Individual Ticket</p>
    <p style ="color:red ;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FTP </p>
    </section>';

}
for($countFTC=1;$countFTC <= $_SESSION['seats']['FTC'];$countFTC++){
    echo '<section class="A4page">
    <img src="ticketicon.jpg" width="500" height="156" alt="ticket logo" style="float:right">
    <p style ="color:green ;font-size:30px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Individual Ticket</p>
    <p style ="color:red ;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FTC </p>
    </section>';

}
?>

</body>
</html>