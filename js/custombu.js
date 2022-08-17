function validateForm() {
    var namea = document.forms["contactForm"]["fname"].value;
	var emailid = document.forms["contactForm"]["femail"].value;
    var password = document.forms["contactForm"]["fpassword"].value; 
    var bokdes = document.forms["contactForm"]["fbook"].value;
if(namea==null || namea==""||namea<2) {
        document.getElementById('username_txt').innerHTML = "";
        alert("**Please filled out..!");
		    return false;
}
if(emailid==null || emailid=="" ){  
    document.getElementById('email_txt').innerHTML = " <div class='error_color'></div>";
    alert("**Please filled out..!");
    return false;  
}
if(password==null || password=="" ) {
    document.getElementById('password_txt').innerHTML = "";
    alert("**Please Upload Image!");
    return false;
} 
if(bokdes==null || bokdes==""||namea<5 ){  
    document.getElementById('book_txt').innerHTML = "";
    alert("**Please filled out..!");
    return false;  
}
alert("Upload Successfully!");
	    return true;
}