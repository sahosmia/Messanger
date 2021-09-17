const form = document.querySelector("#send_form"), //form
  input_class = document.querySelector(".send_message"), //input
  text_content = document.querySelector(".text_content"), // input_class show area
  incoming = form.querySelector(".incoming").value,
  submit_btn = form.querySelector("button"); //submit_btn

text_content.onmouseenter = () => {
  text_content.classList.add("active");
};

text_content.onmouseleave = () => {
  text_content.classList.remove("active");
};

form.addEventListener("submit", function (e) {
  e.preventDefault();
});

submit_btn.addEventListener("click", function () {
  if (input_class.value != "") {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "include/chat.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          input_class.value = "";
          text_content.scrollTop = text_content.scrollHeight;
        }
      }
    };
    let formData = new FormData(form);
    xhr.send(formData);
  }
});

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "include/message_show.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        text_content.innerHTML = data;
        if (!text_content.classList.contains("active")) {
          // scrollToBottom();
          text_content.scrollTop = text_content.scrollHeight;
        }
      }
    }
  };
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("incoming=" + incoming);
}, 500);

// console.log(submit_btn);
// text_content.onmouseenter = () => {
//   text_content.classList.add("active");
// };

// text_content.onmouseleave = () => {
//   text_content.classList.remove("active");
// };
// input_class.onkeyup = () => {
//   if (input_class.value != "") {
//     submit_btn.disabled = false;
//   } else {
//     submit_btn.disabled = true;
//   }
// };
