function validateForm() {
    var namea = document.forms["contactForm"]["fname"].value;
	var emailid = document.forms["contactForm"]["femail"].value;
    var password = document.forms["contactForm"]["fpassword"].value; 
if(namea==null || namea==""||namea<2) {
        document.getElementById('username_txt').innerHTML = "";
		alert("**Username must be filled out");
        return false;
}
if(emailid==null || emailid=="" ){  
    document.getElementById('email_txt').innerHTML = "";
    alert("**Email can be blank....Please Enter your email id.....");
    return false;  
}
if(emailid.indexOf('@') <= 0){  
    document.getElementById('email_txt').innerHTML = "";
    alert("**@invalid email-id...Please Enter valid email-id....");
    return false;  
}
if((emailid.charAt(emailid.length-4) != '.') && (emailid.charAt(emailid.length-3) != '.')){  
    document.getElementById('email_txt').innerHTML = "";
    alert("**.invalid Email Id....");
    return false;  
}
if(password==null || password=="" ) {
    document.getElementById('password_txt').innerHTML = "";
    alert("**Please Enter Password!");
    return false;
} 
alert("Login Successfully!");
	    return true;
}