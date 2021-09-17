let user_list = document.querySelector(".user_list"); // for innerhtml all username

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "include/front.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        user_list.innerHTML = data;
        console.log(data);
      }
    }
  };
  xhr.send();
}, 500); // 500 == 5ms
