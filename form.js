function submitForm() {
  let firstName = document.form.firstName.value;
  let lastName = document.form.lastName.value;
  let email = document.form.email.value;
  let password = document.form.password.value;
  let semester = document.form.semester.value;
  let dept = document.form.dept.value;

  //Regex password string
  let pattern =
    /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

  //Checks the value of the firstname for blank, if blank an alert message pops up.
  if (firstName == null || firstName == "") {
    alert("Name cannot be blank");
    return false;
  }

  //semester value cannot be less than 1 and greater than 8
  else if (semester <= 0 || semester >= 9) {
    alert("Enter a valid semester between 1 to 8");
    return false;
  }

  //Checks the value of the lastname for blank, if blank an alert message pops up.
  else if (lastName == null || lastName == "") {
    alert("Name cannot be blank");
    return false;
  }

  //department validation, value should not be blank
  else if (dept == null || dept == "") {
    alert("Select a Department");
    return false;
  }

  //Checks the value of the email for blank, if blank an alert message pops up.
  else if (email == "" || email == null) {
    alert("Email cannot be blank");
    return false;
  }

  //Checks the value of the password for blank, if blank an alert message pops up.
  else if (password == "" || password == null) {
    alert("Password cannot be blank");
    return false;
  }

  //Checks if the value of the password string as same as the email string. If equal, an inavlid message pops up.
  else if (password == email) {
    alert("Password cannot be same as Email address");
    return false;
  }

  //Checks if value of password string is 'password' or 'Password' or 'PASSWORD'.
  else if (
    password == "password" ||
    password == "Password" ||
    password == "PASSWORD"
  ) {
    alert("Password Invalid");
    return false;
  }

  //Checks the value of the password for number of characters entered, if less than 7 characters an alert messgae pops up.
  else if (password.length < 7) {
    alert("Password cannot be less than 7 characters");
    return false;
  }

  //Checks if the password string matches the regex consisting of altleast one lowercase, uppercase, special character and number.
  else if (pattern.test(password) != true) {
    alert(
      "Password should consist of atleast one special character, lowercase & uppercase character and number"
    );
    return false;
  }
}
