var xPos = 300;
var yPos = 200; 
var step = 1;
var delay = 30; 
var height = 0;
var Hoffset = 0;
var Woffset = 0;
var yon = 0;
var xon = 0;
var pause = true;
var interval;
var divid = img1; //����DIV��ID.
divid.style.top = yPos;
function changePos(){
   width = document.body.clientWidth;
   height = document.body.clientHeight;
   Hoffset = divid.offsetHeight;
   Woffset = divid.offsetWidth;
   divid.style.left = xPos + document.body.scrollLeft;
   divid.style.top = yPos + document.body.scrollTop;
   if(yon){yPos = yPos + step;}else{yPos = yPos - step;}
   if(yPos < 0){yon = 1;yPos = 0;}
   if(yPos >= (height - Hoffset)){yon = 0; yPos = (height - Hoffset);}
   if(xon){xPos = xPos + step;}else{xPos = xPos - step;}
   if(xPos < 0){xon = 1;xPos = 0;}
   if(xPos >= (width - Woffset)){xon = 0; xPos = (width - Woffset);}
}
function start(){
   divid.visibility = "visible";
   interval = setInterval('changePos()',delay);
}
function pause_resume(){
   if(pause){
   clearInterval(interval);
   pause = false;}
   else{
   interval = setInterval('changePos()',delay);
   pause = true; 
   }
}
function closediv(){
   clearInterval(interval);
   divid.style.display = "none";
}
$(document).ready(function(){
	start();
});