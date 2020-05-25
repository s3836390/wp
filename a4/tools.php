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
if (isset($_POST['session-reset'])) {
  foreach($_SESSION as $something => &$whatever) {
       unset($whatever);
  }
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['cust']['name'])){
     $nameErr ="Name is required";
   } else {
     $name = test_input($_POST['cust']['name']);
       if (!preg_match("/^[a-zA-Z\-. ?]{1,100}$/", $name)){
         $name1 = $name;
       $nameErr= "Only letters and whitespace are allowed";
       }
     }
     if (empty($_POST['cust']['email'])){
      $emailErr ="Email is required";
    } else {
      $email = test_input($_POST['cust']['email']);
        if (!filler_var($email,FILTER_VALIDATE_EMAIL)){
          $email1 = $email;
        $emailErr= "Only letters and whitespace are allowed";
        }
      }
}



?>