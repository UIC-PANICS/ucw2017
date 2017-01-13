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