function validateForm() {
    let x = document.forms["signUpForm"]["fname"].value.trim();
    if (x.length === 0 || x.indexOf(' ') >= 0) {
      alert("First name must be filled out");
      return false;
    }
    let y = document.forms["signUpForm"]["lname"].value;
    if (y == "") {
      alert("Last name must be filled out");
      return false;
    }
    let z = document.forms["signUpForm"]["password"].value;
    if (z == "") {
    alert("Password must be filled out");
    return false;
    }
    else if(z.length<8){
        alert("Password legth must be atleast 8 characters");
        return false;
    }
    else if(z.length>15){
        alert("Password length must not exceed 15 characters");
        return false;
    }
    let w = document.forms["signUpForm"]["cpassword"].value;
    if (w == "") {
    alert("Password confirmation must be filled out");
    return false;
    }
    else if(w!=z){
        alert("Passwords did not match. Try again!");
        return false;
    }
    var emailID = document.signUpForm.email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
    
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
       alert("Please enter correct email ID")
       return false;
    }
    if (emailID=""){
        alert("Email must be filled out");
      return false;
    }
    return true;
  }
