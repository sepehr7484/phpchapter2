<?php

$filename=basename($_FILES['uploadfile']['name']);






//if (isset($_FILES['file'])) {
//   $name= basename($_FILES['file']['name']);
//   $tmp=$_FILES['file']['tmp_name'];
//   if (move_uploaded_file($tmp,"uploadfile/$name")) {
//       echo 'Upload Success';
//   } else {
//       echo 'Error: '.$_FILES['file']['error'];
//   }
//   
//   
//   
//   
//}


//$target_dir = "uploadfile/";
//$target_file = $target_dir . basename($_FILES["file"]["name"]);
//$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
//  $check = getimagesize($_FILES["file"]["tmp_name"]);
//  if($check !== false) {
//    echo "File is an image - " . $check["mime"] . ".";
//    $uploadOk = 1;
//  } else {
//    echo "File is not an image.";
//    $uploadOk = 0;
//  }
//}
