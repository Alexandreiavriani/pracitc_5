<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="style.css">



<?php
$large_size="";
$error_type="";
if(isset($_POST['upload'])){
    $file=$_FILES['file'];
    //print_r($file);
        if($file['size']>100*1024*1024){
            $large_size="large size";
        }

        $file_type=pathinfo($file['name'],PATHINFO_EXTENSION);
        echo $file_type;
         if($file_type=="txt" || $file_type=="jpg" || $file_type=="gif"){
             $error_type="correct format";
         }
         else{
            $error_type="not correct format";
         }
         
        }
?>
<p><?=$large_size?></p>
<p><?=$error_type?></p>
<div>
<form method='post' enctype="multipart/form-data" >
<input type="file" name='file' >

<br><br>
<button name='upload'>Upload</button>

</form>

</div>
    
</body>
</html>