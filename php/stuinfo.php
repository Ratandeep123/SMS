<?php

    require("conn.php");
    $flag =true;
    $mag = "Data already successfully";
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($_POST['name']);
        $city = mysqli_real_escape_string($_POST['city']);
        $add = mysqli_real_escape_string($_POST['address']);
        $country = mysqli_real_escape_string($_POST['country']);
        $age = mysqli_real_escape_string($_POST['age']);
        $branch = mysqli_real_escape_string($_POST['branch']);

        $checkSql = "SELECT * FROM Admin where name='$name' and city='$city' and address='$add'and country='$country' and age='$age' and branch='$branch'";

        $res = $conn->query($checkSql);
        if($res->num_rows >0){
            $mag ="data already exit";
            $flag = false;
        }
    }
?>