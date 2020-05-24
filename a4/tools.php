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

}

?>