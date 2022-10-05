
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
   
   
   
        ?>

<!DOCTYPE html>

<html>
    <head>
        <style>
/*            body{
                text-align: right !important;*/
/*            }*/
        </style>
        <meta charset="UTF-8">
        <title>Index</title>
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    </head>
    <body>
     
        
        
        <div class="container-fluid bg-light">
            
            <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;background:gray ">
            
            
                <div class="card">

                     <div class="card-body" style="width: 400px">
                         <form enctype="multipart/form-data" method="post">
                          
                             <input type="file" name="file" id="file">
                            <button type="submit" name="submit" class="btn btn-outline-primary btn-block">
                                Send
                            </button>
                            
                            
                        </form>
            
                   </div>
            
             </div>
          </div>  
        </div>
        
        
    </body>
</html>
