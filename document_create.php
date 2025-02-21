<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $passport = $target_dir . basename($_FILES['passport']['name']);
    $mykid = $target_dir . basename($_FILES['mykid']['name']);
    $birth_certificate = $target_dir . basename($_FILES['birth_certificate']['name']);
    $pay_slip = $target_dir . basename($_FILES['pay_slip']['name']);
    $health_record = $target_dir . basename($_FILES['health_record']['name']);
    $uploadOk = 1;
       
    $sql = "INSERT INTO document 
            (passport, mykid, birth_certificate, pay_slip, health_record)
            VALUES ('$passport', '$mykid', '$birth_certificate', '$pay_slip', '$health_record')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('New documents created successfully'); window.location.href = 'document_read.php';</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href = 'document_read.php';</script>";
            }   
    } else {
    if (move_uploaded_file($_FILES['passport']['tmp_name'], $passport) &&
        move_uploaded_file($_FILES['mykid']['tmp_name'], $mykid) &&
        move_uploaded_file($_FILES['birth_certificate']['tmp_name'], $birth_certificate) &&
        move_uploaded_file($_FILES['pay_slip']['tmp_name'], $pay_slip) &&
        move_uploaded_file($_FILES['health_record']['tmp_name'], $health_record)) 
        {
        /*
        echo "The file ". htmlspecialchars( basename( $_FILES["passport"]["name"])). 
                        . htmlspecialchars( basename( $_FILES["mykid"]["name"])). 
                        . htmlspecialchars( basename( $_FILES["birth_certificate"]["name"])). 
                        . htmlspecialchars( basename( $_FILES["pay_slip"]["name"])). 
                        . htmlspecialchars( basename( $_FILES["health_record"]["name"])). 
                        " has been uploaded.";
        } else {
        echo "Sorry, there was an error uploading your file.";
    }*/
    }

       
}
?>
