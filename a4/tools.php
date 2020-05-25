<?php
  session_start();
  function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
         return $ret;
   else 
        echo $ret; 

} 
function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
         echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
} 
function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "/* Generated with A4's php2js() function */";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}

function isFullorDiscount($day,$hour) {
  if ($day=='MON' || $day=='WED') {
      return 'Discount';
  } else {
      if ($day=='TUE' || $day=='THU' || $day=='FRI'){
          if ($hour='T12') { return 'Discount';}
          else return 'Full';
      } else return 'Full';

  }
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$errorsFound=0;
$cleanName=$_POST['cust']['name'];
$cleanEmail=$_POST['cust']['email'];
$cleanPhone=$_POST['cust']['phone'];
$cleanCard=$_POST['cust']['card'];
$cleanMonth=$_POST['cust']['expirymonth'];
$cleanYear=$_POST['cust']['expiryyear'];
$cleanId=$_POST['movie']['id'];
$cleanDay=$_POST['movie']['day'];
$cleanHour=$_POST['movie']['hour'];
$cleanSTA=$_POST['seats']['STA'];
$cleanSTP=$_POST['seats']['STP'];
$cleanSTC=$_POST['seats']['STC'];
$cleanFTA=$_POST['seats']['FTA'];
$cleanFTP=$_POST['seats']['FTP'];
$cleanFTC=$_POST['seats']['FTC'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['cust']['name'])){
     $nameErr ="Name is required";
     $errorsFound++;
   } else {
     $name = test_input($_POST['cust']['name']);
       if (!preg_match("/^[a-zA-Z\-. ?]{1,100}$/", $name)){
         $name1 = $name;
       $nameErr= "Only letters and whitespace are allowed";
       $errorsFound++;
       }
     }
     if (empty($_POST['cust']['email'])){
      $emailErr ="Email is required";
      $errorsFound++;
    } else {
      $email = test_input($_POST['cust']['email']);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $email1 = $email;
        $emailErr= "Invalid Email address";
        $errorsFound++;
        }
    }
    if (empty($_POST['cust']['phone'])){
      $phoneErr ="Phone number is required";
      $errorsFound++;
    } else {
      $phone = test_input($_POST['cust']['phone']);
        if (!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/", $phone)){
          $phone1 = $phone;
        $phoneErr= "Invalid Mobilephone number";
        $errorsFound++;
        }
    }
    if (empty($_POST['cust']['card'])){
      $cardErr ="Credit card is required";
      $errorsFound++;
    } else {
      $card = test_input($_POST['cust']['card']);
        if (!preg_match("/^( ?\d){14,19}$/", $card)){
          $card1 = $card;
        $cardErr= "Invalid Credit card";
        $errorsFound++;
        }
    }

    
    if (empty($_POST['cust']['expiryyear'])){
      $errorsFound++;
    } else {
      $year = $_POST['cust']['expiryyear'];
      if ($year < (date("y"))){
        $errorsFound++;
      };
    }

    if (empty($_POST['cust']['expirymonth'])){
      $errorsFound++;
    } else {
      $month = $_POST['cust']['expirymonth'];
      if ($month <= (date("m")+1) && $year=date("y")){
        $errorsFound++;
      };
    }

    if (empty($_POST['movie']['id'])){
      $errorsFound++;
    } else {
      $id=$_POST['movie']['id'];
      if ($id!=='ACT'&& $id!=='RMC' && $id!=='ANM' && $id!=='AHF'){
        $errorsFound++;
      }
    }
    
    if (empty($_POST['movie']['day'])){
      $errorsFound++;
    } else {
      $day=$_POST['movie']['day'];
      if ($day!=='MON'&& $day!=='TUE' && $day!=='WED' && $day!=='THU' && $day !=='FRI'&& $day !=='SAT' && $day !== 'SUN'){
        $errorsFound++;
      }
    }
    if (empty($_POST['movie']['hour'])){
      $errorsFound++;
    } else {
      $hour=$_POST['movie']['hour'];
      if ($hour!=='T12'&& $hour!=='T15' && $hour!=='T18' && $hour!=='T21'){
        $errorsFound++;
      }
    }
    if (is_int($_POST['seats']['STA']) && ($_POST['seats']['STA']<0 || $_POST['seats']['STA']>10)){
      $errorsFound++;
    }
    if (is_int($_POST['seats']['STP']) && ($_POST['seats']['STP']<0 || $_POST['seats']['STP']>10)){
      $errorsFound++;
    }
    if (is_int($_POST['seats']['STC']) && ($_POST['seats']['STC']<0 || $_POST['seats']['STC']>10)){
      $errorsFound++;
    }
    if (is_int($_POST['seats']['FTA']) && ($_POST['seats']['FTA']<0 || $_POST['seats']['FTA']>10)){
      $errorsFound++;
    }
    if (is_int($_POST['seats']['FTP']) && ($_POST['seats']['FTP']<0 || $_POST['seats']['FTP']>10)){
      $errorsFound++;
    }
    if (is_int($_POST['seats']['FTC']) && ($_POST['seats']['FTC']<0 || $_POST['seats']['FTC']>10)){
      $errorsFound++;
    }

    if($errorsFound==0){
      $_SESSION['cust']['name']=$cleanName;
      $_SESSION['cust']['email']=$cleanEmail;
      $_SESSION['cust']['phone']=$cleanPhone;
      $_SESSION['cust']['card']=$cleanCard;
      $_SESSION['cust']['expirymonth']=$cleanMonth;
      $_SESSION['cust']['expiryyear']=$cleanYear;
      $_SESSION['movie']['id']=$cleanId;
      $_SESSION['movie']['day']=$cleanDay;
      $_SESSION['movie']['hour']=$cleanHour;
      $_SESSION['seats']['STA']=$cleanSTA;
      $_SESSION['seats']['STP']=$cleanSTP;
      $_SESSION['seats']['STC']=$cleanSTC;
      $_SESSION['seats']['FTA']=$cleanFTA;
      $_SESSION['seats']['FTP']=$cleanFTP;
      $_SESSION['seats']['FTC']=$cleanFTC;
      header("Location:Receipt.php");
    }
   
}
if (isset($_POST['session-reset'])) {
  unset($_SESSION['cust']['name']);
  unset($_SESSION['cust']['email']);
  unset($_SESSION['cust']['phone']);
  unset($_SESSION['cust']['card']);
  unset($_SESSION['cust']['expirymonth']);
  unset($_SESSION['cust']['expiryyear']);
  unset($_SESSION['movie']['id']);
  unset($_SESSION['movie']['day']);
  unset($_SESSION['movie']['hour']);
  unset($_SESSION['seats']['STA']);
  unset($_SESSION['seats']['STP']);
  unset($_SESSION['seats']['STC']);
  unset($_SESSION['seats']['FTA']);
  unset($_SESSION['seats']['FTP']);
  unset($_SESSION['seats']['FTC']);
  }

?>