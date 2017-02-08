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

function showdetailbox(boxname) {
    var element1=document.getElementById("pcbackground").style;
    var element2=document.getElementById(boxname).style;
    element1.display="block";
    element2.display="block";
}

function hidedetailbox(boxname) {
    var element1=document.getElementById("pcbackground").style;
    var element2=document.getElementById(boxname).style;
    element1.display="none";
    element2.display="none";
}
