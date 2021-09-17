<?php
include_once('function.php');
$img = $_FILES['img'];

 $img_name = $_FILES['img']['name'];  //img name 1
 $img_size = $_FILES['img']['size'];  //img name 1

  // img_name explode for get img extention
  $img_explode = explode('.',$img_name);  // explod this name by '.'
  $img_ext = end($img_explode); //get last index
  $extensions = array("jpeg", "jpg", "png", "gif", "JPG", "JPEG", "PNG", "GIF"); //some img extention

  if (in_array($img_ext, $extensions) == false) {
    echo "Please give an valid image";
  }else{
      echo 'success';
  }
