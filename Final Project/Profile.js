function save()
{
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var mobile = document.getElementById('mobile').value;
    var a1 = document.getElementById('a1').value;
    var state = document.getElementById('state').value;
    var country = document.getElementById('country').value;
    var email = document.getElementById('email').value;
    var pass = document.getElementById('pass').value;
    var c_pass = document.getElementById('cpass').value;
    
    var s1 = document.getElementById('s1');
    var s2 = document.getElementById('s2');

    //alert("First Name : " +fname);
    //alert(fname.length + " " + lname.length + " " + mobile.length + " " + a1.length + " " + a2.length 
       // + " " + postcode.length + " " + state.length + " " + country.length + " " + email.length);
    /*if(fname.length==0 || lname.length==0 || mobile.length==0 || a1.length==0 || a2.length==0 
        || postcode.length==0 || state.length==0 || country.length==0 || email.length==0)
    {
        alert(fname.length + " " + lname.length + " " + mobile.length + " " + a1.length + " " + a2.length 
        + " " + postcode.length + " " + state.length + " " + country.length + " " + email.length);
    }
    else{
        alert("Profile Updated Successfully");
    }*/

    if(fname==0 || lname==0 || mobile==0 || a1==0 || state==0 || country==0 || email==0 || pass==0 || c_pass==0)
    {
        //alert("Please Enter Proper Details ");
    }
    else
    {
        //alert("Profile Updated Successfully");
        s1.innerHTML = fname;
        s2.innerHTML = email;
    }
    
}