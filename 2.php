<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$large_size="";
if(isset($_POST['send'])){
    $file=$_FILES['file'];

    if($file['size']>50*1024*1024){
        $large_size="large size";
    }

    else{
        echo $file['name'].".txt";
        if(isset($_POST['delete'])){
            unlink($file['name'].".txt");
        }
       
        
        
    }
}

?>




    <div>

    <form method='post'enctype="multipart/form-data" >
<input type="file" name='file'>
<br><br>
<button name='send'>Send</button>
<br><br>
<button name='delete'>Delete</button>
    </form>
    </div>
</body>
</html>