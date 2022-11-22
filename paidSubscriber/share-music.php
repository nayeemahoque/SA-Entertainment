<?php 
    $target_dir = "uploads/";
    $target_file = $target_dir . basename( $_FILES['myfile']['name']);
    $src = $_FILES['myfile']['tmp_name'];
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($imageFileType != "mp3")
    {
      echo "Sorry, only mp3 files are allowed.";
    }

    if(move_uploaded_file($src, $target_file)){
        echo "success";
    } else {
        echo "error";
    }
?>
