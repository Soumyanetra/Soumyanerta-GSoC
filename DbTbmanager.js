function change(id){
	document.getElementById(id).style.opacity=1;
}
function rechange(id){
	document.getElementById(id).style.opacity=.7;
}
function examine(){
	if(document.getElementById("eruser").innerHTML == "" && document.getElementById("erpass").innerHTML == "")
		return(true);
	return(false);
}