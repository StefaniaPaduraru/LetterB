function validateForm() {
    let email = document.forms["signInForm"]["email"].value;
    let password = document.forms["signInForm"]["password"].value;
  
    if (email === "" || password === "") {
      alert("Email and password must be filled out");
      return false;
    }
  
    let atpos = email.indexOf("@");
    let dotpos = email.lastIndexOf(".");
  
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
      alert("Invalid email format");
      return false;
    }
  }