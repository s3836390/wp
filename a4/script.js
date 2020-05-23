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



function futureonly(){
  var chosenmonth = document.getElementById("cust-expirymonth").value;
  var chosenyear = document.getElementById("cust-expiryyear").value;
  if (chosenmonth<5 && chosenyear==2020){
    alert('Please choose a future date')
  }
}

   

var priceSTA={};
var priceSTP={};
var priceSTC={};
var priceFTA={};
var priceFTP={};
var priceFTC={};

function booking1(){
  
  document.getElementById('movie-id').value='ACT';
  document.getElementById('movie-day').value='WED';
  document.getElementById('movie-hour').value='T21';
  document.getElementById('title').innerHTML='Avengers: Endgame';
  document.getElementById('day').innerHTML='Wednesday';
  document.getElementById('time').innerHTML='9pm';
  priceSTA.value=14;
  priceSTP.value=12.5;
  priceSTC.value=11;
  priceFTA.value=24;
  priceFTP.value=22.5;
  priceFTC.value=21;
}

function booking2(){
  
  document.getElementById('movie-id').value='ACT';
  document.getElementById('movie-day').value='THU';
  document.getElementById('movie-hour').value='T21';
  document.getElementById('title').innerHTML='Avengers: Endgame';
  document.getElementById('day').innerHTML='Thursday';
  document.getElementById('time').innerHTML='9pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking3(){
  
  document.getElementById('movie-id').value='ACT';
  document.getElementById('movie-day').value='FRI';
  document.getElementById('movie-hour').value='T21';
  document.getElementById('title').innerHTML='Avengers: Endgame';
  document.getElementById('day').innerHTML='Friday';
  document.getElementById('time').innerHTML='9pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking4(){
  
  document.getElementById('movie-id').value='ACT';
  document.getElementById('movie-day').value='SAT';
  document.getElementById('movie-hour').value='T18';
  document.getElementById('title').innerHTML='Avengers: Endgame';
  document.getElementById('day').innerHTML='Saturday';
  document.getElementById('time').innerHTML='6pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking5(){
  
  document.getElementById('movie-id').value='ACT';
  document.getElementById('movie-day').value='SUN';
  document.getElementById('movie-hour').value='T18';
  document.getElementById('title').innerHTML='Avengers: Endgame';
  document.getElementById('day').innerHTML='Sunday';
  document.getElementById('time').innerHTML='6pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking6(){
  
  document.getElementById('movie-id').value='RMC';
  document.getElementById('movie-day').value='MON';
  document.getElementById('movie-hour').value='T18';
  document.getElementById('title').innerHTML='Top End Wedding';
  document.getElementById('day').innerHTML='Monday';
  document.getElementById('time').innerHTML='6pm';
  priceSTA.value=14;
  priceSTP.value=12.5;
  priceSTC.value=11;
  priceFTA.value=24;
  priceFTP.value=22.5;
  priceFTC.value=21;
}

function booking7(){
  
  document.getElementById('movie-id').value='RMC';
  document.getElementById('movie-day').value='TUE';
  document.getElementById('movie-hour').value='T18';
  document.getElementById('title').innerHTML='Top End Wedding';
  document.getElementById('day').innerHTML='Tuesday';
  document.getElementById('time').innerHTML='6pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking8(){
  
  document.getElementById('movie-id').value='RMC';
  document.getElementById('movie-day').value='SAT';
  document.getElementById('movie-hour').value='T15';
  document.getElementById('title').innerHTML='Top End Wedding';
  document.getElementById('day').innerHTML='Saturday';
  document.getElementById('time').innerHTML='3pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking9(){
  
  document.getElementById('movie-id').value='RMC';
  document.getElementById('movie-day').value='SUN';
  document.getElementById('movie-hour').value='T15';
  document.getElementById('title').innerHTML='Top End Wedding';
  document.getElementById('day').innerHTML='Sunday';
  document.getElementById('time').innerHTML='3pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking10(){
  
  document.getElementById('movie-id').value='ANM';
  document.getElementById('movie-day').value='MON';
  document.getElementById('movie-hour').value='T12';
  document.getElementById('title').innerHTML='Dumbo';
  document.getElementById('day').innerHTML='Monday';
  document.getElementById('time').innerHTML='12pm';
  priceSTA.value=14;
  priceSTP.value=12.5;
  priceSTC.value=11;
  priceFTA.value=24;
  priceFTP.value=22.5;
  priceFTC.value=21;
}

function booking11(){
  
  document.getElementById('movie-id').value='ANM';
  document.getElementById('movie-day').value='TUE';
  document.getElementById('movie-hour').value='T12';
  document.getElementById('title').innerHTML='Dumbo';
  document.getElementById('day').innerHTML='Tuesday';
  document.getElementById('time').innerHTML='12pm';
  priceSTA.value=14;
  priceSTP.value=12.5;
  priceSTC.value=11;
  priceFTA.value=24;
  priceFTP.value=22.5;
  priceFTC.value=21;
}

function booking12(){
  
  document.getElementById('movie-id').value='ANM';
  document.getElementById('movie-day').value='WED';
  document.getElementById('movie-hour').value='T18';
  document.getElementById('title').innerHTML='Dumbo';
  document.getElementById('day').innerHTML='Wednesday';
  document.getElementById('time').innerHTML='6pm';
  priceSTA.value=14;
  priceSTP.value=12.5;
  priceSTC.value=11;
  priceFTA.value=24;
  priceFTP.value=22.5;
  priceFTC.value=21;
}

function booking13(){
  
  document.getElementById('movie-id').value='ANM';
  document.getElementById('movie-day').value='THU';
  document.getElementById('movie-hour').value='T18';
  document.getElementById('title').innerHTML='Dumbo';
  document.getElementById('day').innerHTML='Thursday';
  document.getElementById('time').innerHTML='6pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking14(){
  
  document.getElementById('movie-id').value='ANM';
  document.getElementById('movie-day').value='FRI';
  document.getElementById('movie-hour').value='T18';
  document.getElementById('title').innerHTML='Dumbo';
  document.getElementById('day').innerHTML='Friday';
  document.getElementById('time').innerHTML='6pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking15(){
  
  document.getElementById('movie-id').value='ANM';
  document.getElementById('movie-day').value='SAT';
  document.getElementById('movie-hour').value='T12';
  document.getElementById('title').innerHTML='Dumbo';
  document.getElementById('day').innerHTML='Saturday';
  document.getElementById('time').innerHTML='12pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking16(){
  
  document.getElementById('movie-id').value='ANM';
  document.getElementById('movie-day').value='SUN';
  document.getElementById('movie-hour').value='T12';
  document.getElementById('title').innerHTML='Dumbo';
  document.getElementById('day').innerHTML='Sunday';
  document.getElementById('time').innerHTML='12pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking17(){
  
  document.getElementById('movie-id').value='AHF';
  document.getElementById('movie-day').value='WED';
  document.getElementById('movie-hour').value='T12';
  document.getElementById('title').innerHTML='The Happy Prince';
  document.getElementById('day').innerHTML='Wednesday';
  document.getElementById('time').innerHTML='12pm';
  priceSTA.value=14;
  priceSTP.value=12.5;
  priceSTC.value=11;
  priceFTA.value=24;
  priceFTP.value=22.5;
  priceFTC.value=21;
}

function booking18(){
  
  document.getElementById('movie-id').value='AHF';
  document.getElementById('movie-day').value='THU';
  document.getElementById('movie-hour').value='T12';
  document.getElementById('title').innerHTML='The Happy Prince';
  document.getElementById('day').innerHTML='Thursday';
  document.getElementById('time').innerHTML='12pm';
  priceSTA.value=14;
  priceSTP.value=12.5;
  priceSTC.value=11;
  priceFTA.value=24;
  priceFTP.value=22.5;
  priceFTC.value=21;
}

function booking19(){
  
  document.getElementById('movie-id').value='AHF';
  document.getElementById('movie-day').value='FRI';
  document.getElementById('movie-hour').value='T12';
  document.getElementById('title').innerHTML='The Happy Prince';
  document.getElementById('day').innerHTML='Friday';
  document.getElementById('time').innerHTML='12pm';
  priceSTA.value=14;
  priceSTP.value=12.5;
  priceSTC.value=11;
  priceFTA.value=24;
  priceFTP.value=22.5;
  priceFTC.value=21;
}

function booking20(){
  
  document.getElementById('movie-id').value='AHF';
  document.getElementById('movie-day').value='SAT';
  document.getElementById('movie-hour').value='T21';
  document.getElementById('title').innerHTML='The Happy Prince';
  document.getElementById('day').innerHTML='Saturday';
  document.getElementById('time').innerHTML='9pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function booking21(){
  
  document.getElementById('movie-id').value='AHF';
  document.getElementById('movie-day').value='SUN';
  document.getElementById('movie-hour').value='T21';
  document.getElementById('title').innerHTML='The Happy Prince';
  document.getElementById('day').innerHTML='Sunday';
  document.getElementById('time').innerHTML='9pm';
  priceSTA.value=19.8;
  priceSTP.value=17.5;
  priceSTC.value=15.3;
  priceFTA.value=30;
  priceFTP.value=27;
  priceFTC.value=24;
}

function calculate(){
  var seatsSTA = document.getElementById('seats-STA').value;
  var seatsSTP = document.getElementById('seats-STP').value;
  var seatsSTC = document.getElementById('seats-STC').value;
  var seatsFTA = document.getElementById('seats-FTA').value;
  var seatsFTP = document.getElementById('seats-FTP').value;
  var seatsFTC = document.getElementById('seats-FTC').value;
 
  document.getElementById('totalprice').innerHTML = (seatsSTA*priceSTA.value + seatsSTP*priceSTP.value+ seatsSTC*priceSTC.value+seatsFTA*priceFTA.value+seatsFTP*priceFTP.value+seatsFTC*priceFTC.value).toFixed(2);
}






