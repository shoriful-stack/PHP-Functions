<!-- Checking for a File Before Uploading -->
<?php
$directory = "/uploads";
$fileName = $directory. basename($_FILES["fileToUpload"] ["name"]);
if(file_exists($fileName)){
    echo "This file already exists";
}else{
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$fileName);
    echo "File uploaded successfully";
}
