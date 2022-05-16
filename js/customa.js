function validateForm() {
    var namea = document.forms["contactForm"]["fname"].value;
    var password = document.forms["contactForm"]["fpassword"].value; 
if(namea==null || namea==""||namea<2) {
        document.getElementById('username_txt').innerHTML = "<div class='error_color'> **Username must be filled out</div> ";
		    return false;
}
if(password==null || password==""||password<8 ) {
    document.getElementById('password_txt').innerHTML = " **<div class='error_color'>Please Enter Password</div>";
    return false;
} 
alert("Successfully!");
	    return true;
}