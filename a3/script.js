function current1(){
document.getElementById("link1").style.color="red";
document.getElementById("link2").style.color=("blue");
document.getElementById("link3").style.color=("blue");
}
function current2(){
document.getElementById("link2").style.color="red";
document.getElementById("link1").style.color=("blue");
document.getElementById("link3").style.color=("blue");
}
function current3(){
document.getElementById("link3").style.color="red";
document.getElementById("link1").style.color=("blue");
document.getElementById("link2").style.color=("blue");
 }
document.getElementById("wheel1").addEventListener("wheel",current1)
document.getElementById("wheel2").addEventListener("wheel",current2)
document.getElementById("wheel3").addEventListener("wheel",current3)

function showhidden1(){
  document.getElementById("synopsisACT").style.visibility="visible"
  document.getElementById("synopsisRMC").style.visibility="hidden"
  document.getElementById("synopsisANM").style.visibility="hidden"
  document.getElementById("synopsisAHF").style.visibility="hidden"
}
function showhidden2(){
  document.getElementById("synopsisRMC").style.visibility="visible"
  document.getElementById("synopsisACT").style.visibility="hidden"
  document.getElementById("synopsisANM").style.visibility="hidden"
  document.getElementById("synopsisAHF").style.visibility="hidden"
}
function showhidden3(){
  document.getElementById("synopsisANM").style.visibility="visible"
  document.getElementById("synopsisACT").style.visibility="hidden"
  document.getElementById("synopsisRMC").style.visibility="hidden"
  document.getElementById("synopsisAHF").style.visibility="hidden"
}
function showhidden4(){
  document.getElementById("synopsisAHF").style.visibility="visible"
  document.getElementById("synopsisACT").style.visibility="hidden"
  document.getElementById("synopsisRMC").style.visibility="hidden"
  document.getElementById("synopsisANM").style.visibility="hidden"
}
var movieid = {
  md1:ACT,
}
var movieday ="MON,TUE,WED,THU,FRI,SAT,SUN";
var moviehour ="T12,T15,T18,T21";
var prices = {   p1: { o1:18.5, o2:15.5, o3:30 },  p2: { o1:28.5, o2:25.5, o3:40 },  p3: { o1:38.5, o2:35.5, o3:50 }};
alert(prices.p2.o3); 
alert(prices.p3.o1);
