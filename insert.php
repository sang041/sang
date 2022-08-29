<?php
    include("confic_inc.php");

    $firstname = $_POST['txt_firstname'];
    $name = $_POST['txt_name'];
    $lastname = $_POST['txt_lastname'];
    $sex = $_POST['txt_sex'];
    $birthday = $_POST['txt_birthdate'];
    $address = $_POST['txt_address'];
    $tle = $_POST['txt_tle'];
    $email = $_POST['txt_email'];
    
    
    $sql = "INSERT INTO tbl_member (id, firstname, name, lastname, sex, birthday, address, tle, email) VALUES ('', '$firstname', '$name', '$lastname', '$sex', '$birthday', '$address', '$tle', '$email')";

    if(mysqli_query($conn, $sql)){
        echo "เพิ่มข้อมูลสำเร็จ";
    }else{
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }
    $conn -> close();   
    
    //echo $firstname;
    //echo "<br>";
    //echo $name. "<br>";
    //echo $lastname. "<br>";
    //echo $sex. "<br>";
    //echo $birthdate. "<br>";
    //echo $address."<br>";
    //echo $tle. "<br>";
    //echo $email. "<br>";
?>