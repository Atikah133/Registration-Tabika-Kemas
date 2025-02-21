<?php
include 'config.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $father_name = $_POST['father_name'];
    $father_ic_no = $_POST['father_ic_no'];
    $father_citizen = $_POST['father_citizen'];
    $father_race = $_POST['father_race'];
    $father_job = $_POST['father_job'];
    $father_monthly_income = $_POST['father_monthly_income'];
    $father_phone = $_POST['father_phone'];
    $father_status = isset($_POST['father_status']) ? implode(',', $_POST['father_status']) : '';
    $father_address = $_POST['father_address'];

    $mother_name = $_POST['mother_name'];
    $mother_ic_no = $_POST['mother_ic_no'];
    $mother_citizen = $_POST['mother_citizen'];
    $mother_race = $_POST['mother_race'];
    $mother_job = $_POST['mother_job'];
    $mother_monthly_income = $_POST['mother_monthly_income'];
    $mother_phone = $_POST['mother_phone'];
    $mother_status = isset($_POST['mother_status']) ? implode(',', $_POST['mother_status']) : '';
    $mother_address = $_POST['mother_address'];

    // Insert data into the database
    $sql = "INSERT INTO parent_guardian 
            (father_name, father_ic_no, father_citizen, father_race, father_job, father_monthly_income, father_phone, father_status, father_address, mother_name, mother_ic_no, mother_citizen, mother_race, mother_job, mother_monthly_income, mother_phone, mother_status, mother_address)
            VALUES ('$father_name', '$father_ic_no', '$father_citizen', '$father_race', '$father_job', '$father_monthly_income', '$father_phone','$father_status', '$father_address','$mother_name', '$mother_ic_no', '$mother_citizen', '$mother_race', '$mother_job', '$mother_monthly_income', '$mother_phone', '$mother_status', '$mother_address')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New parent/guardian created successfully'); window.location.href = 'parent_read.php';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href = 'parent_read.php';</script>";
    }
    
}

?>