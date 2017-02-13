function phonebar(){
	var element1=document.getElementById("phonebar").style;
	var element2=document.getElementById("phonebarbackground").style;
	element1.left="0";
	element2.zIndex="200";
    element2.backgroundColor="rgba(0,0,0,0.7)";
}

function hidephonebar(){
	var element1=document.getElementById("phonebar").style;
	var element2=document.getElementById("phonebarbackground").style;
	element1.left="-200px";
	element2.zIndex="-1";
    element2.backgroundColor="rgba(0,0,0,0)";
}

function showdetailbox(boxname) {
    var element1=document.getElementById("pcbackground").style;
    var element2=document.getElementById(boxname).style;
    element2.display="block";
    element1.backgroundColor="rgba(0,0,0,0.7)";
    element1.zIndex="200";
    document.body.style.overflow="hidden";
    setTimeout(function(){
        var element3=document.getElementById(boxname).style;
        element3.top="0";
    },1);
}

function hidedetailbox(boxname) {
    var element1=document.getElementById("pcbackground").style;
    var element2=document.getElementById(boxname).style;
    element2.display="none";
    element1.backgroundColor="rgba(0,0,0,0)";
    element1.zIndex="-1";
    document.body.style.overflow="auto";
    if(screen.width>=1024){
        element2.top="1000px";
    }
    else {
        element2.top = "100px";
    }
}

function openpage(link) {
    window.open(link);
}