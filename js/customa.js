function validateForm() {
    var namea = document.forms["contactForm"]["fname"].value;
    var password = document.forms["contactForm"]["fpassword"].value; 
if(namea==null || namea==""||namea<2) {
        document.getElementById('username_txt').innerHTML = "";
        alert("Enter the Username");
        return false;
}
if(password==null || password==""||password<8 ) {
    document.getElementById('password_txt').innerHTML = "";
    alert("Please Enter Password");
    return false;
} 
alert("Successfully!");
	    return true;
}