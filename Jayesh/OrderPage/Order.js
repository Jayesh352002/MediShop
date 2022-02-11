var i1 = document.getElementById('no').value;
disable();

function disable()
{
	var i1 = document.getElementById('no').value;
	if(i1=="1")
	{
		document.getElementById('minus').disabled = true;
	}

}
	
function add()
{
	var inp = document.getElementById('no').value;
	var p = document.getElementById('no');
	var one = document.getElementById('one').innerHTML;
	var one_x = document.getElementById('one');
	var two = document.getElementById('two').innerHTML;
	var two_x = document.getElementById('two');
	var three = document.getElementById('three').innerHTML;
	var three_x = document.getElementById('three');
	var four = document.getElementById('four').innerHTML;
	var four_x = document.getElementById('four');
	var five = document.getElementById('five').innerHTML;
	var five_x = document.getElementById('five');
	var six = document.getElementById('six').innerHTML;
	var six_x = document.getElementById('six');
	var seven = document.getElementById('seven').innerHTML;
	var seven_x = document.getElementById('seven');
	var a = ++inp;
	if(parseInt(a)>=1)
	{
		sub_inner();
	}
	p.value = a;
	var v1 = parseInt(one)+1;
	one_x.innerHTML = v1
	three_x.innerHTML = v1;
	five_x.innerHTML = v1;

	var v2 = parseInt(two)+10;
	two_x.innerHTML = v2;
	six_x.innerHTML = v2 ; 

	var v3 = parseInt(four)+70;
	four_x.innerHTML = v3 ; 
	seven_x.innerHTML = v3; 
	
}
function sub_inner()
{
	var i1 = document.getElementById('no').value;
	i1++;
	if(i1=='1')
	{
		document.getElementById('minus').disabled = true;
	}
	else{
		document.getElementById('minus').disabled = false;
	}
}
function sub()
{
	var i1 = document.getElementById('no').value;
	var p = document.getElementById('no');
	var one = document.getElementById('one').innerHTML;
	var one_x = document.getElementById('one');
	var two = document.getElementById('two').innerHTML;
	var two_x = document.getElementById('two');
	var three = document.getElementById('three').innerHTML;
	var three_x = document.getElementById('three');
	var four = document.getElementById('four').innerHTML;
	var four_x = document.getElementById('four');
	var five = document.getElementById('five').innerHTML;
	var five_x = document.getElementById('five');
	var six = document.getElementById('six').innerHTML;
	var six_x = document.getElementById('six');
	var seven = document.getElementById('seven').innerHTML;
	var seven_x = document.getElementById('seven');
	
	var a = --i1;

	if(a=='1')
	{
		document.getElementById('minus').disabled = true;
	}
	else{
		document.getElementById('minus').disabled = false;
	}

	p.value = a;
	var v1 = parseInt(one)-1;
	one_x.innerHTML = v1
	three_x.innerHTML = v1;
	five_x.innerHTML = v1;

	var v2 = parseInt(two)-10;
	two_x.innerHTML = v2;
	six_x.innerHTML = v2 ; 

	var v3 = parseInt(four)-70;
	four_x.innerHTML = v3 ; 
	seven_x.innerHTML = v3; 
			
}


function success()
{
	/*var fName = document.getElementById('fname').value;
	var lName = document.getElementById('lname').value;
	var deliveryAddress = document.getElementById('address').value;
	var mobileNo = document.getElementById('mobileNo').value;
	var aMobileNo = document.getElementById('aMobileNo').value;
	var cardNo = document.getElementById('cardNumber').value;
	var expDate = document.getElementById('expDate').value;
	var cvvNo = document.getElementById('cvv').value;
	var cardHolderName = document.getElementById('CHname').value;;
	*/

	var fName = document.forms['placeOrder']['firstname'].value;
	var lName = document.forms['placeOrder']['lastname'].value;
	var deliveryAddress = document.forms['placeOrder']['dAddr'].value;
	var mobileNo = document.forms['placeOrder']['mobile'].value;
	var aMobileNo = document.forms['placeOrder']['AMobile'].value;
	var cardNo = document.forms['placeOrder']['cardno'].value;
	var expDate = document.forms['placeOrder']['ExpairyDate'].value;
	var cvvNo = document.forms['placeOrder']['cvv'].value;
	var cardHolderName = document.forms['placeOrder']['cardName'].value;

	if(fName.length == 0 || lName.length == 0 || deliveryAddress.length == 0 || mobileNo.length == 0 ||
		cardNo.length == 0 || expDate.length == 0 || cvvNo.length == 0 || cardHolderName.length == 0)
	{
		alert("Please Fill All the Neccessary Details !  ");
	}
	else 
	{
		if(mobileNo.length!=10 || aMobileNo.length!=10)
		{
			alert("Invalid Mobile Number !");
		}
		else
		{
			if(cardNo.length!=12)
			{
				alert("Invalid Card Number !");
			}
			else
			{
				if(cvvNo.length!=3)
				{
					alert("Invalid CVV Number !");
				}
				else
				{
					window.open("OTP.html");
				}
			}
		}
	}
	
}



function newCity()
{
	var state = document.getElementById('state').value;
	var stateName ; 
	if(state == "Assam")
	{
		stateName = ["Guwahati", "Lakhipur"];
		stateName.sort();
	}
	else if(state == "Bihar")
	{
		stateName = ["Patna" , "Gaya" , "Bhagalpur" , "Muzaffarpur"]
		stateName.sort();
	}
	else if(state == "Gujrat")
	{
		stateName = ["Surat", "Ahamdabed", "Rajkot"];
		stateName.sort();
	}
	else if(state == "Himachal Pradesh")
	{
		stateName = ["Shimla", "Dharamsala", "Solan", "Palampur" , "Manali"];
		stateName.sort();
	}
	else if(state == "Kerla")
	{
		stateName = ["Koachi", "Thiruvananthapuram", "Kannur" , "Vatakara"];
		stateName.sort();
	}
	else if(state == "Madhya Pradesh")
	{
		stateName = ["Indore", "Bhopal", "Gwalior" , "Jabalpur" , "Ujjain" , "Ratlam"];
		stateName.sort();
	}
	else if(state == "Maharashtra")
	{
		stateName = ["Pune", "Mumbai", "Nashik", "Nagpur" , "Dhule" , "Aurangabad" , "Amravati" , 
		"Kolhapur" , "Jalgaon" , "Latur" , "Akola" , "Ahmednagar" , "Beed" , "Jalna"];
		stateName.sort();
	}
	else if(state == "Punjab")
	{
		stateName = ["Amritsar", "Ludhiana", "Jalandhar" , "Patiala" , "Bathinda"];
		stateName.sort();
	}
	else if(state == "Rajasthan")
	{
		stateName = ["Jaipur", "Kota", "Jodhpur" , "Ajmer" , "Bikaner", "Udaipur", "Pali" , "Bharatpur"];
		stateName.sort();
	}
	else if(state == "Tamil Nadu")
	{
		stateName = ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli" , "Vellore"];
		stateName.sort();
	}
	var str = "";
	for (var item of stateName) {
	    str += "<option>" + item + "</option>"
	}
	document.getElementById("city").innerHTML = str;
}