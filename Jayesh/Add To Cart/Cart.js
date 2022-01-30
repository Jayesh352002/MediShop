var i1 = document.getElementById('no').value;
disable();
function disable()
{
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
	var total = document.getElementById('total-price').innerHTML;
	var t = document.getElementById('total-price');
	var item = document.getElementById('it-det').innerHTML;
	var i = document.getElementById('it-det');
	var rs = document.getElementById('r').innerHTML;
	var rs1 = document.getElementById('r');
	if(parseInt(inp)>=1)
	{
		//alert(parseInt(inp))
		sub();
	}
	var a = ++inp;
	p.value = a;
	var b = parseInt(total)+70;
	t.innerHTML = b ;
	var c = parseInt(item)+1; 
	i.innerHTML = c;
	var d = parseInt(rs)+70;
	rs1.innerHTML = d;
	//alert(p.value)
}

function sub()
{
	//alert("Sub Called");
	//var i1 = document.getElementById('no').value;
	if(i1=="1")
	{
		disable();
	}
	document.getElementById('minus').disabled = false;
	var inp = document.getElementById('no').value;
	var p = document.getElementById('no');
	var total = document.getElementById('total-price').innerHTML;
	var t = document.getElementById('total-price');
	var item = document.getElementById('it-det').innerHTML;
	var i = document.getElementById('it-det');
	var rs = document.getElementById('r').innerHTML;
	var rs1 = document.getElementById('r');
	var a = --inp;
	p.value = a;
	var b = parseInt(total)-70;
	t.innerHTML = b ; 
	var c = parseInt(item)-1; 
	i.innerHTML = c;
	var d = parseInt(rs)-70;
	rs1.innerHTML = d;
	//alert(p.value)
}

function save()
{
	alert("Your Item is Save Successfully....")
	//document.getElementById('med-img').src = "crocin.jpg";
	//document.getElementById('save').style.color = "gray";
}

function open()
{
	//alert("Open Called")
	window.open("https://www.w3schools.com");
	var a1 = document.getElementById('crocin');
	
	//window.location = "Cart.html";
	//imageLoad()
}
function imageLoad()
{
	//alert("ImageLoad Called")

	document.getElementById('med-img').src = "crocin.jpg";
}