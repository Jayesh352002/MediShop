var x=document.getElementById("Login");
var y=document.getElementById("register");
var z=document.getElementById("btn");

var logUserID = document.getElementById('user_id').value;
var logPass = document.getElementById('password').value;




function register(){
	x.style.left="-400px";
	y.style.left="50px";
	z.style.left="110px";
	//window.location.href = "HomePage.html";
}

function Login(){
	x.style.left="50px";
	y.style.left="450px";
	z.style.left="110";
}

function login(){
	//alert("User ID : " + logUserID + "  Password : " + logPass);
}
function reg()
{
	var regName = document.forms['registerForm']['regName'].value;
	var regEmail = document.forms['registerForm']['regEmail'].value;
	var regMobile = document.forms['registerForm']['regMobile'].value;
	var regUserName = document.forms['registerForm']['regUsername'].value;
	var regPass = document.forms['registerForm']['regPass'].value;
	var regC_Pass = document.forms['registerForm']['regCPass'].value;
	
	if(regName.length == 0 || regEmail.length == 0 || regMobile.length == 0 || regMobile.length == 0 || 
		regUserName.length == 0 || regPass.length == 0 || regC_Pass.length == 0)
	{
		alert("Please Enter Valid Details !");
	}
	else
	{
		if(regPass != regC_Pass)
		{
			alert("Password Not Matched !");
		}
		else
		{
			alert("Register Successfully !");
		}
	}
	
}


