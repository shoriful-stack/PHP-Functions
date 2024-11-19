<?php
$file = "images.png";

if(file_exists($file)){
    echo "The $file exists";
}else{
    echo "The $file does not exists";
}
