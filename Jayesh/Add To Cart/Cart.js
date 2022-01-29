var inp = document.getElementById('no').value;
var p = document.getElementById('no');

function sub()
{
	//alert(inp)
	var a = --inp;
	p.value = a;
	var total = document.getElementById('total-price').innerHTML;
	var t = document.getElementById('total-price');
	var item = document.getElementById('it-det').innerHTML;
	var i = document.getElementById('it-det');
	var rs = document.getElementById('r').innerHTML;
	var rs1 = document.getElementById('r');
	var b = parseInt(total)-70;
	t.innerHTML = b ; 
	var c = parseInt(item)-1; 
	i.innerHTML = c;
	var d = parseInt(rs)-70;
	rs1.innerHTML = d;
	//alert(p.value)
}
function add()
{
	//alert("Hello Plus")
	//alert(item)
	var a = inp++;
	p.value = a;
	var total = document.getElementById('total-price').innerHTML;
	var t = document.getElementById('total-price');
	var item = document.getElementById('it-det').innerHTML;
	var i = document.getElementById('it-det');
	var rs = document.getElementById('r').innerHTML;
	var rs1 = document.getElementById('r');
	var b = parseInt(total)+70;
	t.innerHTML = b ;
	var c = parseInt(item)+1; 
	i.innerHTML = c;
	var d = parseInt(rs)+70;
	rs1.innerHTML = d;
	//alert(p.value)
}