const form = document.getElementById("signin_form"),
  email = document.getElementById("email_form"),
  password = document.getElementById("password_form");

let formTag = document.querySelector(".main_form form");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const emailValue = email.value.trim(),
    passwordValue = password.value.trim();

  var errorCheck;
  errorCheck = false;

  // email
  if (emailValue === "") {
    errorAction(email, "please give your email");
    errorCheck = true;
  } else {
    successAction(email);
  }

  if (errorCheck === false) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "include/log_email.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          if (data === "success") {
            location.href = "front.php";
          } else {
            errorAction(email, data);
            errorCheck = true;
          }
        }
      }
    };
    let formData = new FormData(formTag);
    xhr.send(formData);
  }
});

function errorAction(input, message) {
  var parentel = input.parentElement;
  var small = parentel.querySelector("small");
  var input = parentel.querySelector("input");

  small.innerText = message;
  input.className = "error";
}

function successAction(input) {
  var parentel = input.parentElement;
  var input = parentel.querySelector("input");
  var small = parentel.querySelector("small");

  input.className = "success";
  small.innerText = "";
}

// you can undrestan if you see app.js page totaly.   so all comment is removed
