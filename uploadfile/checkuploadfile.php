<?php
echo '<pre>';
var_dump($_FILES);
echo '</pre>';


if(isset($_POST['submit'])){
    $dir='../uploadfile/';
    $titlefile=$_FILES['file']['name'];
    $size=$_FILES['file']['size'];
    $upload_ok=true;
    $type= strtolower(pathinfo($titlefile,PATHINFO_EXTENSION));
    //-----------------------
    
    //براي محدود سازي حجم فايل هستش
     if($type!='jpg'&&$type!='png'){
         echo ' unfind file.';
         $upload_ok=false;
     }
    
    
    
    
    //-----------------------------------
if($size>30000){
        echo ' yor file Maximum size';
        $upload_ok=false;
        
    }
    
    
    //-----------------------
    
    //محدود سازي نوع فايل در سيستم
    
   
    //-----------------------
    
    
if(file_exists($dir.$titlefile)){
    echo 'Sorry, File already Exits.';
    $upload_ok=false;
    
}
if($upload_ok){
       $checkupload= move_uploaded_file($_FILES['file']['tmp_name'],$dir.$titlefile);
    if($checkupload){
//        echo 'Success Upload File';
        echo '<h1>'.'Success Upload File'.'</h1>';
        
    } else {
           echo '<h1 >'.'Not Success Upload File'.'</h1>';
    }
    
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
        <title>CheckUploadFile</title>
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    </head>
    <body>
     
        
        
        <div class="container-fluid bg-light">
            
            <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;background:gray ">
            
            
                <div class="card">

                     <div class="card-body" style="width: 400px">
                         <form enctype="multipart/form-data"  method="post">
                          
                             <input type="file" name="file" id="file"><br>
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
