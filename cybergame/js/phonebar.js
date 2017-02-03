function phonebar(){
	var element1=document.getElementById("phonebar");
	var element2=document.getElementById("phonebarbackground");
	element1.style.left="0";
	element2.style.display="block";
}

function hidephonebar(){
	var element1=document.getElementById("phonebar");
	var element2=document.getElementById("phonebarbackground");
	element1.style.left="-200px";
	element2.style.display="none"; 
}

function hearth(){
    var element1=document.getElementById("uploadcard").style;
    var element2=document.getElementById("watchcard").style;
    var element3=document.getElementById("hearthstone").style;
    if(element1.display=="none"){
        element1.display="block";
        element2.display="block";
        element3.display="block";
    }
    else{
        element1.display="none";
        element2.display="none";
        element3.display="none";
    }
}

function showdiv(){
    var element1=document.getElementById("spanul").style;
    var element2=document.getElementById("bar2").style;
    element1.display="block";
    element2.height="91px";
}
function hidediv(){
    var element1=document.getElementById("spanul").style;
    var element2=document.getElementById("bar2").style;
    element1.display="none";
    element2.height="50px";
}
var y1 = window.scrollY;
var positionY=y1;

function scrollit(time) {

    var y2 = testscroll.offsetTop;

    var speed = (y2 - y1) / time;
     positionY = positionY + speed;
    window.scrollTo(0,positionY);
    if(positionY<y2){
    	var interfunction="scrollit("+time+")";
    	window.setTimeout(interfunction,1);
	}
}

function scrolltoit(positionY,speed){
        positionY=positionY+speed;
        window.scrollTo(0, positionY);
        console.log("count");
}