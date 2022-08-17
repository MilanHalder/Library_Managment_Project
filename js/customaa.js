function validateForm() {
    var namea = document.forms["contactForm"]["fname"].value;
    var password = document.forms["contactForm"]["fpassword"].value;
    var secondpassword=document.forms["contactForm"]["rePassword"].value;  
if(namea==null || namea==""||namea<2) {
        document.getElementById('username_txt').innerHTML = "";
		alert("**Username must be filled out!");
        return false;
}
if(password==null || password==""||password<8) {
    document.getElementById('password_txt').innerHTML = "";
    alert("**Please Enter Password!");
    return false;
}
if (secondpassword==null || secondpassword=="" ) {
    document.getElementById('password_txt').innerHTML = "";
    alert("**Please Enter Re-password!");
    return false;
}
if( password!=secondpassword ){  
    document.getElementById('password_txt').innerHTML = "";
    alert("**password must be same!");
    return false;  
}  
alert("Add Successfully!");
	    return true;
}