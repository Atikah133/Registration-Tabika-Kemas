<?php
include 'config.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acknowledge = isset($_POST['acknowledge']) ? 1 : 0;
    $eligibility_met = isset($_POST['eligibility_met']) ? 1 : 0;
    $participation_agreement = isset($_POST['participation_agreement']) ? 1 : 0;
    $health_service_permission = isset($_POST['health_service_permission']) ? 1 : 0;
    $tour_permission = isset($_POST['tour_permission']) ? 1 : 0;
    $liability_agreement = isset($_POST['liability_agreement']) ? 1 : 0;

    // Insert data into the table
    $sql = "INSERT INTO declaration (acknowledge, eligibility_met, participation_agreement, health_service_permission, tour_permission, liability_agreement)
          VALUES ('$acknowledge', '$eligibility_met', '$participation_agreement', '$health_service_permission', '$tour_permission', '$liability_agreement')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New declaration created successfully'); window.location.href = 'declaration_read.php';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href = 'declaration_read.php';</script>";
    }

}

?>