function database(str)
{
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/Rupiz/Dbsearch.php?dbname="+str,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200)
			document.getElementById("eruser").innerHTML=req.responseText;
	};
}
function table(str)
{
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/Rupiz/Tbsearch.php?tbname="+str+"&dbname="+document.getElementById("dbname").value,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200)
			document.getElementById("erpass").innerHTML=req.responseText;
	};
}