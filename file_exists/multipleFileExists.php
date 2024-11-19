<?php
$files = ["file.txt", "file2.txt", "file3.txt"];
foreach($files as $file){
    if(file_exists(($file))){
        echo "$file exists \n";
    }else{
        echo "$file does not exists";
    }
}