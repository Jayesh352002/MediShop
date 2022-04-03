alert("Welcome User Jay |");

var i1 = document.getElementById('no').value;
disable();

function disable()
{
	var i1 = document.getElementById('no').value;
	if(i1=="1")
	{
		//alert(i1);
		document.getElementById('minus').disabled = true;
	}

}
	
function add()
{
	//alert("Hello Plus")
	//alert(item)
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
		//alert(parseInt(inp))
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
	
	/*var b = parseInt(total)+70;
	t.innerHTML = b ;
	var c = parseInt(item)+1; 
	i.innerHTML = c;
	var d = parseInt(rs)+70;
	rs1.innerHTML = d;
	//alert(p.value)*/
}
function sub_inner()
{
	var i1 = document.getElementById('no').value;
	i1++;
	if(i1=='1')
	{
		document.getElementById('minus').disabled = true;
		//disable();
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
		//disable();
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

