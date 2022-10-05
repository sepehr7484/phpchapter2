
   <?php
   echo '<pre>';
    var_dump($_FILES);
   
     echo '</pre>';
     echo '<hr>';
     if (isset($_POST['submit'])) {
                    $dir='../uploadfile/';
                    $name=$_FILES['file']['name'];
                    $check= move_uploaded_file($_FILES['file']['tmp_name'],$dir.$name);
                    if ($check) {
                        echo 'Success';
                    } else {
                        echo 'Not Success';
                    }
         
         
         
               }
   
   
