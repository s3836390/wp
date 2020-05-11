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