<?php
include('config.php');

if(isset($_POST['upload'])){
    $category_name = $_POST['Cname'];
    $category_type = $_POST['Ctype'];
    $category_desc = $_POST['Cdesc'];

    $category_upload = "INSERT INTO `addcat` (`id`, `cname`, `ctype`, `cdescription`) VALUES (NULL, '$category_name', '$category_type', '$category_desc')";
    $conn_cat = mysqli_query($connection,$category_upload);

    if(!$conn_cat){
        die ("not upload a category");
    }
    else{
        header("location:http://localhost/admin/addcategory.php");
    }
}

?>
