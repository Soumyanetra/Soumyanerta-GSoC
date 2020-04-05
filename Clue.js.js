function plist(str)
{
	var req = new XMLHttpRequest();
	req.open("get","http://localhost/Rupiz/Plist.php?name="+str,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200)
			document.getElementById("participents").innerHTML=req.responseText;
	};
}