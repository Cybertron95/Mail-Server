// JavaScript Document
function chkBlnk(Eid,divId)
{
	var name=document.getElementById(Eid).value;	
	if(name=="")
	{
		document.getElementById(divId).innerHTML="fill your  name";	
	}
	else if(name.length<4)
	{
		document.getElementById(divId).innerHTML="name must be 4 char";
	}
	else
	{
	document.getElementById(divId).innerHTML="";	
	}
}

//check ascii value for first name and last name
function chkNum(event,divId)
{
	if(!((event.which>=65 && event.which<=90) || (event.which>=97 && event.which<=122) || event.which==0 || event.which==8))
	{
		document.getElementById(divId).innerHTML="invalid entry";
		return false;
	}
}

//check password
function chkPass()
{
	var p=document.getElementById("pwd").value;

	if(p=="")
	{
		document.getElementById("error2").innerHTML="fill your password";
	}
	else if(p.length<6)
	{
		document.getElementById("error2").innerHTML="lenght must be greater than 6";
	}
	else
	{
	document.getElementById("error2").innerHTML="";	
	}
}

//check confirm pass is equal to pass
function chkCpass()
{
	var p=document.getElementById("pwd").value;	
	var cp=document.getElementById("cpwd").value;
	if(p!=cp)
	{
		document.getElementById("error3").innerHTML="conf pass doesn't match";	
	}
	else
	{
	document.getElementById("error3").innerHTML="";		
	}
}


//chekc email id
function chkEid()
{
	var x=document.getElementById("eid").value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	//alert(atpos+" "+dotpos );
	if(atpos<5 || dotpos<atpos+5)
	{
		document.getElementById("error5").innerHTML="invalid email";
	}
	else
	{
	document.getElementById("error5").innerHTML="";	
	}
}

//check your country
function chkCity()
{
	var c=document.getElementById("cont").value;
	if(c=="")
	{
	document.getElementById("error10").innerHTML="Select Your city";
	}
	else
	{
	document.getElementById("error10").innerHTML="";	
	}
}