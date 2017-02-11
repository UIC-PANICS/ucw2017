function phonebar(){
	var element1=document.getElementById("phonebar");
	var element2=document.getElementById("phonebarbackground");
	element1.style.left="0";
	element2.style.display="block";
	document.body.style.overflow="hidden";
}

function hidephonebar(){
	var element1=document.getElementById("phonebar");
	var element2=document.getElementById("phonebarbackground");
	element1.style.left="-200px";
	element2.style.display="none";
	document.body.style.overflow="auto";
}

function showdetailbox(boxname) {
    var element1=document.getElementById("pcbackground").style;
    var element2=document.getElementById(boxname).style;
    element1.display="block";
    element2.display="block";
    document.body.style.overflow="hidden";
}

function hidedetailbox(boxname) {
    var element1=document.getElementById("pcbackground").style;
    var element2=document.getElementById(boxname).style;
    element1.display="none";
    element2.display="none";
    document.body.style.overflow="auto";
}

function openpage(link) {
    window.open(link);
}