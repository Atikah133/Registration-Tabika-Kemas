<?php
include 'config.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $citizen = $_POST['citizen'];
    $race = $_POST['race'];
    $date_of_birth = $_POST['date_of_birth'];
    $birth_certificate_no = $_POST['birth_certificate_no']; //adjust no as a num
    $place_of_birth = $_POST['place_of_birth'];
    $gender = isset($_POST['girl']) ? 'Girl' : 'Boy';
    $address = $_POST['address'];
    $shirt_size = $_POST['shirt_size'];
    $disease = isset($_POST['disease']) ? implode(", ", $_POST['disease']) : '';
    $high = $_POST['high'];
    $weight = $_POST['weight'];
    $allergies = isset($_POST['allergies']) ? implode(", ", $_POST['allergies']) : '';
    $disability = isset($_POST['disability']) ? implode(", ", $_POST['disability']) : '';
    $contact_name = $_POST['contact_name'];
    $contact_address = $_POST['contact_address'];
    $contact_phone = $_POST['contact_phone'];
    $relationship = $_POST['relationship'];


    $sql = "INSERT INTO child 
            (name,age, citizen, race, date_of_birth, birth_certificate_no, place_of_birth, gender, address, shirt_size, disease, high, weight, allergies, disability,contact_name,contact_address,contact_phone,relationship)
            VALUES ('$name', '$age', '$citizen', '$race', '$date_of_birth', '$birth_certificate_no', '$place_of_birth', '$gender', '$address', '$shirt_size', '$disease', '$high', '$weight', '$allergies', '$disability', '$contact_name', '$contact_address', '$contact_phone', '$relationship')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('New children created successfully'); window.location.href = 'child_read.php';</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href = 'child_read.php';</script>";
            }   
    
}

?>



