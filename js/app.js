const form = document.getElementById("form"),
  username = document.getElementById("username"),
  email = document.getElementById("email"),
  password = document.getElementById("password"),
  cpassword = document.getElementById("cpassword"),
  img = document.getElementById("img");

let formTag = document.querySelector(".main_form form"); // all form data get this veriable
// create event for submit
form.addEventListener("submit", function (e) {
  e.preventDefault();

  // all input value variable
  const usernameValue = username.value.trim(), //username
    emailValue = email.value.trim(), //email
    passwordValue = password.value.trim(), //password
    cpasswordValue = cpassword.value.trim(), //cpassword
    imgValue = img.value.trim(); //img

  // errorCheck for check has any error   true == nai, false == ase
  var errorCheck;
  errorCheck = false;
  // /*
  // username
  if (usernameValue === "") {
    errorAction(username, "please give your name");
    errorCheck = true; // if has any error errorCheck convert true to false  (false == ase)
  } else {
    successAction(username);
  }

  // email
  // email validetion regx
  var validRegex =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (emailValue === "") {
    errorAction(email, "please give your email");
    errorCheck = true; // if has any error errorCheck convert true to false  (false == ase)
  } else if (!validRegex.test(emailValue)) {
    errorAction(email, "please give a valid email");
    errorCheck = true;
  } else {
    // check already exists
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "include/reg_email.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          if (data === "success") {
            successAction(email);
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

  // password
  // regular expression for password minimum 4 dizit, maximum 12 dizit, a lowercase, a uppercase, a specal caracter, a number
  var regularExpression =
    /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{4,12}$/;
  if (passwordValue === "") {
    //empty
    errorAction(password, "please give your password");
    errorCheck = true;
  } else if (!regularExpression.test(passwordValue)) {
    //regx
    errorAction(
      password,
      "please give at lest a number, a specail carecter, a lowercase, a uppercase, minimum 4 dizit and maximum 12 dizit"
    );
    errorCheck = true;
  } else {
    successAction(password);
  }

  // confirmation password
  if (cpasswordValue === "") {
    errorAction(cpassword, "please give your cpassword");
    errorCheck = true;
  } else if (cpasswordValue !== passwordValue) {
    errorAction(
      cpassword,
      "dont match your confirmation password with password"
    );
    errorCheck = true;
  } else {
    successAction(cpassword);
  }

  // image
  if (imgValue === "") {
    errorAction(img, "please give your image");
    errorCheck = true;
  } else {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "include/imgvalidation.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          if (data === "success") {
            successAction(img);
          } else {
            errorAction(img, data);
            errorCheck = true;
          }
        }
      }
    };
    let formData = new FormData(formTag);
    xhr.send(formData);
  }

  // check has any error     redirect insert.php page
  if (errorCheck === false) {
    // check already exists
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "include/reg_email.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          if (data === "success") {
            successAction(email);


            let xhr = new XMLHttpRequest();
            xhr.open("POST", "include/signup.php", true);
            xhr.onload = () => {
              if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                  let data = xhr.response;
                  if (data === "success") {
                    location.href="front.php";
                    // console.log(errorCheck);
                  }
                }
              }
            }
            let formData = new FormData(formTag);
            xhr.send(formData);




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











// sign in code



// const form = document.getElementById("signin_form"),
//   email = document.getElementById("email_form"),
//   password = document.getElementById("password_form");
//
//
//
//
//   form.addEventListener("submit", function (e) {
//     e.preventDefault();
//
//     // all input value variable
//     const emailValue = email.value.trim(), //email
//       passwordValue = password.value.trim(); //password
//
//
//     // errorCheck for check has any error   true == nai, false == ase
//     var errorCheck;
//     errorCheck = false;
//
//     // email
//     if (emailValue === "") {
//       errorAction(email, "please give your email");
//       errorCheck = true; // if has any error errorCheck convert true to false  (false == ase)
//     } else {
//       successAction(email);
//     }
//
//     // password
//     if (passwordValue === "") {
//       //empty
//       errorAction(password, "please give your password");
//       errorCheck = true;
//     } else {
//       successAction(password);
//     }
//
//     // check has any error     redirect insert.php page
//     // if (errorCheck === false) {
//     //   // check already exists
//     //   let xhr = new XMLHttpRequest();
//     //   xhr.open("POST", "include/reg_email.php", true);
//     //   xhr.onload = () => {
//     //     if (xhr.readyState === XMLHttpRequest.DONE) {
//     //       if (xhr.status === 200) {
//     //         let data = xhr.response;
//     //         if (data === "success") {
//     //           successAction(email);
//     //
//     //
//     //           let xhr = new XMLHttpRequest();
//     //           xhr.open("POST", "include/signup.php", true);
//     //           xhr.onload = () => {
//     //             if (xhr.readyState === XMLHttpRequest.DONE) {
//     //               if (xhr.status === 200) {
//     //                 let data = xhr.response;
//     //                 if (data === "success") {
//     //                   location.href="front.php";
//     //                   // console.log(errorCheck);
//     //                 }
//     //               }
//     //             }
//     //           }
//     //           let formData = new FormData(formTag);
//     //           xhr.send(formData);
//     //
//     //         } else {
//     //           errorAction(email, data);
//     //           errorCheck = true;
//     //         }
//     //       }
//     //     }
//     //   };
//     //   let formData = new FormData(formTag);
//     //   xhr.send(formData);
//     //
//     //
//     //
//     //
//     //
//     //
//     //
//     //
//     //
//     //
//     //
//     //
//     //
//     //
//     // }
//
//   });