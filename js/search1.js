const searchBar = document.querySelector(".search_bar input"),
  usersList = document.querySelector(".user_list");
searchBar.onkeyup = () => {
  let search_item = searchBar.value;

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "include/search.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        usersList.innerHTML = data;
        console.log(data);
      }
    }
  };
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("search_item=" + search_item);
};
