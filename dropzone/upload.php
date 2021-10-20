<?php
    $upload_dir = "../uploads/";
    if(!empty($_FILES)){     
        $fileName = $_FILES['file']['name'];
        $uploaded_file = $upload_dir.$fileName;    
        if(move_uploaded_file($_FILES['file']['tmp_name'],$uploaded_file)){
            //insert file information into db table
            echo $_FILES['file']['name'];
        }    
    }
?>