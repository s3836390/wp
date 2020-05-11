function current1() {
  document.getElementById("link1").style.color = "red";
  document.getElementById("link2").style.color = ("blue");
  document.getElementById("link3").style.color = ("blue");
}
function current2() {
  document.getElementById("link2").style.color = "red";
  document.getElementById("link1").style.color = ("blue");
  document.getElementById("link3").style.color = ("blue");
}
function current3() {
  document.getElementById("link3").style.color = "red";
  document.getElementById("link1").style.color = ("blue");
  document.getElementById("link2").style.color = ("blue");
}
document.getElementById("wheel1").addEventListener("wheel", current1)
document.getElementById("wheel2").addEventListener("wheel", current2)
document.getElementById("wheel3").addEventListener("wheel", current3)

function showhidden1() {
  document.getElementById("synopsisACT").style.visibility = "visible"
  document.getElementById("synopsisRMC").style.visibility = "hidden"
  document.getElementById("synopsisANM").style.visibility = "hidden"
  document.getElementById("synopsisAHF").style.visibility = "hidden"
}
function showhidden2() {
  document.getElementById("synopsisRMC").style.visibility = "visible"
  document.getElementById("synopsisACT").style.visibility = "hidden"
  document.getElementById("synopsisANM").style.visibility = "hidden"
  document.getElementById("synopsisAHF").style.visibility = "hidden"
}
function showhidden3() {
  document.getElementById("synopsisANM").style.visibility = "visible"
  document.getElementById("synopsisACT").style.visibility = "hidden"
  document.getElementById("synopsisRMC").style.visibility = "hidden"
  document.getElementById("synopsisAHF").style.visibility = "hidden"
}
function showhidden4() {
  document.getElementById("synopsisAHF").style.visibility = "visible"
  document.getElementById("synopsisACT").style.visibility = "hidden"
  document.getElementById("synopsisRMC").style.visibility = "hidden"
  document.getElementById("synopsisANM").style.visibility = "hidden"
}

var today = new Date();
var chosendate = document.getElementById("cust-expiry") ;
function futureonly() {
if (chosendate>today) {
  alert("Please insert future date");
}}

var seatsSTA = document.getElementById('seats-STA').value;
var seatsSTP = document.getElementById('seats-STP').value;
var seatsSTC = document.getElementById('seats-STC').value;
var seatsSTA = document.getElementById('seats-STA').value;
var seatsSTP = document.getElementById('seats-STP').value;
var seatsSTC = document.getElementById('seats-STC').value;



document.getElementById('totalprice').innerHTML = (seatsSTA*3).toFixed(2);

