function validateForm() {
    var namea = document.forms["contactForm"]["fname"].value;
    var password = document.forms["contactForm"]["fpassword"].value;
    var secondpassword=document.forms["contactForm"]["rePassword"].value;  
if(namea==null || namea==""||namea<2) {
        document.getElementById('username_txt').innerHTML = "<div class='error_color'> **Username must be filled out</div> ";
		    return false;
}
if(password==null || password==""||password<8) {
    document.getElementById('password_txt').innerHTML = " **<div class='error_color'>Please Enter Password</div>";
    return false;
}
if (secondpassword==null || secondpassword=="" ) {
    document.getElementById('password_txt').innerHTML = " **<div class='error_color'>Please Enter Re-password</div>";
    return false;
}
if( password!=secondpassword ){  
    document.getElementById('password_txt').innerHTML = " **<div class='error_color'>password must be same!</div>";
    return false;  
}  
alert("Add Successfully!");
	    return true;
}