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



function futureonly() {
  var chosendate = document.getElementById("cust-expiry").value;
  var today = new Date();
  console.log(chosendate + "   " + today)
  if (chosendate>today) {
    alert("Please insert future date");
  }
}

function booking(){
  document.getElementsByClassName('THU T21').value=19.8;
  document.getElementById('movie-id').value='ACT';
  document.getElementById('movie-day').value='THU';
  document.getElementById('movie-hour').value='T21';
  document
}yP
function sta(){
  var seatsSTA = document.getElementById('seats-STA').value;
  var seatsSTP = document.getElementById('seats-STP').value;
  var seatsSTC = document.getElementById('seats-STC').value;
  var seatsFTA = document.getElementById('seats-FTA').value;
  var seatsFTP = document.getElementById('seats-FTP').value;
  var seatsFTC = document.getElementById('seats-FTC').value;
  var priceSTA = document.getElementsByClassName('THU T21').value;
  document.getElementById('totalprice').innerHTML = (seatsSTA*priceSTA).toFixed(2);
}






