
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <title>REGISTRATION TABIKA KEMAS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-xxl">

        <h1>REGISTRATION TABIKA KEMAS</h1><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="parent_manage.php">Parent/Guardian's Information</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
        <div>
            <a class="btn btn-primary"  href="parent_manage.php" role="button">Parent/Guardian's Personal Information</a>
            <a class="btn btn-primary"  href="parent_read.php" role="button">View the Information</a>
            <a class="btn btn-primary" href="parent_update.php" role="button">Update the Information</a>
            <a class="btn btn-primary" href="parent_delete.php" role="button">Delete the Information</a>
            <div>
        <br>
        <h2>Section B: Family Income</h2>
        <h4>Family Information</h4>
        <table class="table table-bordered border-primary">
            <?php
            include 'config.php';
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM parent_guardian";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table><tr>
                        <th>ID</th>
                        <th>Father/Guardian's Name</th>
                        <th>I/C No</th>
                        <th>Citizen</th>
                        <th>Race</th>
                        <th>Job</th>
                        <th>Income (RM)</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Address</th>
                        <th>Mother/Guardian's Name</th>
                        <th>I/C No</th>
                        <th>Citizen</th>
                        <th>Race</th>
                        <th>Job</th>
                        <th>Income (RM)</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Address</th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["parent_id"]."</td>
                            <td>".$row["father_name"]."</td>
                            <td>".$row["father_ic_no"]."</td>
                            <td>".$row["father_citizen"]."</td>
                            <td>".$row["father_race"]."</td>
                            <td>".$row["father_job"]."</td>
                            <td>".$row["father_monthly_income"]."</td>
                            <td>".$row["father_phone"]."</td>
                            <td>".$row["father_status"]."</td>
                            <td>".$row["father_address"]."</td>
                            <td>".$row["mother_name"]."</td>
                            <td>".$row["mother_ic_no"]."</td>
                            <td>".$row["mother_citizen"]."</td>
                            <td>".$row["mother_race"]."</td>
                            <td>".$row["mother_job"]."</td>
                            <td>".$row["mother_monthly_income"]."</td>
                            <td>".$row["mother_phone"]."</td>
                            <td>".$row["mother_status"]."</td>
                            <td>".$row["mother_address"]."</td>
                            </tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No information detected";
                    }
                    $conn->close();
            ?>
        </table>
       
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
