function phonebar(){
	var element1=document.getElementById("phonebar").style;
	var element2=document.getElementById("phonebarbackground").style;
	element1.transform="translate3d(200px,0,0)";
	element2.zIndex="200";
    element2.backgroundColor="rgba(0,0,0,0.7)";
}

function hidephonebar(){
	var element1=document.getElementById("phonebar").style;
	var element2=document.getElementById("phonebarbackground").style;
	element1.transform="translate3d(0,0,0)";
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
        element3.transform="translate3d(0,-50px,0)";
    },1);
}

function hidedetailbox(boxname) {
    var element1=document.getElementById("pcbackground").style;
    var element2=document.getElementById(boxname).style;
    element1.backgroundColor="rgba(0,0,0,0)";
    element1.zIndex="-1";
    document.body.style.overflow="auto";
    element2.transform="translate3d(0,0,0)";
    if(screen.width>=1024){
        setTimeout(function(){
            element2.display="none";
        },100);
    }
    else{
        element2.display="none";
    }
}

function openpage(link) {
    window.open(link);
}