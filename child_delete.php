<?php
        include 'config.php';

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $child_id = $conn->real_escape_string($_POST['child_id']);

            $sql = "DELETE FROM child WHERE child_id='$child_id'";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Information deleted successfully'); window.location.href = 'child_read.php';</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href = 'child_read.php';</script>";
            }

            $conn->close();
        }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <title>REGISTRATION TABIKA KEMAS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-md">
            <h1>REGISTRATION TABIKA KEMAS</h1><br>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="child_manage.php">Children's Information</a></li>
                    <li class="breadcrumb-item"><a href="child_read.php">View</a></li>
                    <li class="breadcrumb-item"><a href="child_update.php">Update</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Delete</li>
                </ol>
            </nav>
            <div>
                <a class="btn btn-primary"  href="child_manage.php" role="button">Children's Personal Information</a>
                <a class="btn btn-primary"  href="child_read.php" role="button">View the Information</a>
                <a class="btn btn-primary" href="child_update.php" role="button">Update the Information</a>
                <a class="btn btn-primary" href="child_delete.php" role="button">Delete the Information</a>
            <div>
            <br>
            <div id="Create" class="tabcontent">
                <form action="child_delete.php" method="POST" class="row g-3">
                            <!-- Section A: Personal Details -->
                        <h2>Part A: Child's Personal Details</h2>
                        <h4>Children's Information</h4>
                        <div class="col-md-10">
                            <label for="child_id">Child ID:</label>
                            <input type="number" id="child_id" name="child_id" required><br><br>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                </form>
            </div>
        </div>
        <footer>
            <div class="card text-center" style="100%">
                <div class="card-header">
                    +60 11-3744 6725 | Email | Facebook | Instagram | Twitter
                </div>
                <div class="card-body">
                    <p>Tabika Kemas Supprt Center,<br>Lot 1213, kampung Berangan Pondok,<br>16200 Tumpat, Kelantan, Malaysia</p>
                    <h5 class="card-text">© 2025 Tabika Kemas</h5>
                </div>
            </div>
        </footer>
</body>
</html>
