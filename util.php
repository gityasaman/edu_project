<?php
function upload($uploadedfile, $dir){
    $file = $_FILES['upfile'];
    $from = $file['tmp_name'];
    
    $to = "$dir/".$file['name'];
    if(!file_exists("$dir")){
        mkdir("$dir");
        echo "directory created succesfully";
    } else{
        echo "DIRECTORY ALREADY EXISTES";
    }
    if(file_exists($to)){
        
    }
    move_uploaded_file($from, $to);
    return true;
    
}
?>