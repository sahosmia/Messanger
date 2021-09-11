const form = document.getElementById("signin_form"),
  email = document.getElementById("email_form"),
  password = document.getElementById("password_form");

  let formTag = document.querySelector(".main_form form"); // all form data get this veriable



  form.addEventListener("submit", function (e) {
    e.preventDefault();
    // all input value variable
    const emailValue = email.value.trim(), //email
      passwordValue = password.value.trim(); //password


    // errorCheck for check has any error   true == nai, false == ase
    var errorCheck;
    errorCheck = false;

    // email
    if (emailValue === "") {
      errorAction(email, "please give your email");
      errorCheck = true; // if has any error errorCheck convert true to false  (false == ase)
    } else {
      successAction(email);
    }

    // password
    if (passwordValue === "") {
      //empty
      errorAction(password, "please give your password");
      errorCheck = true;
    } else {
      successAction(password);
    }

    // check has any error     redirect insert.php page
    if (errorCheck === false) {
      // check already exists
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "include/log_email.php", true);
      xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            let data = xhr.response;
            if (data === "success") {
              location.href="front.php";
            } else {
              errorAction(email, data);
              errorCheck = true;
            }
          }
        }
      }
      let formData = new FormData(formTag);
      xhr.send(formData);



    }

  });

  function errorAction(input, message) {
    //   select form control
    var parentel = input.parentElement; //parent Element
    var small = parentel.querySelector("small"); //small tag    show error message
    var input = parentel.querySelector("input"); //input tag    for error border at input

    //  action
    small.innerText = message; // error message
    input.className = "error"; //error border at input
  }

  function successAction(input) {
    //   select form control
    var parentel = input.parentElement; //parent Element
    var input = parentel.querySelector("input"); //input tag    for success border at input
    var small = parentel.querySelector("small"); //small tag    show success message

    // action
    input.className = "success"; //success border at input
    small.innerText = ""; // success message is null
  }
