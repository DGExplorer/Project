<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//If there is csv file, then file name, file size, temp name, type and get extension
    if(isset($_FILES['csv'])){
        $errors=array();
        $file_name = $_FILES['csv']['name'];
        $file_size = $_FILES['csv']['size'];
        $file_tmp = $_FILES['csv']['tmp_name'];
        $file_type = $_FILES['csv']['type'];
        $file_ext = explode(".", $file_name);
        $file_ext = end ($file_ext);

        //if it is not a csv, then add error
        if(strtolower($file_ext) != "csv") {
            $errors[]="extention not allowed";
        }
        //If the file exceeds the size, then add error
        if($file_size > 2097152) {
            $errors[]='File size must be less than 2 MB';
        }
        //if there are no errors, then move file into upload directory, and redirect to display a table
        if(empty($errors)==true) {
            move_uploaded_file($file_tmp,'upload/'.$file_name);
           header('Location:display.php?file_name='.$file_name);
        }else{
            print_r($errors);
        }
    }
    ?>


