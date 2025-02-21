
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
                <li class="breadcrumb-item"><a href="document_manage.php">Document</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
        <div>
            <a class="btn btn-primary"  href="document_manage.php" role="button">Document</a>
            <a class="btn btn-primary"  href="document_read.php" role="button">View the Document</a>
            <a class="btn btn-primary" href="document_update.php" role="button">Update the Document</a>
            <a class="btn btn-primary" href="document_delete.php" role="button">Delete the Document</a>
        <div>
        <br>
        <h3>File Upload</h3>
        <table class="table table-bordered border-primary">
            <?php
            include 'config.php';
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM document";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table><tr>
                        <th>ID</th>
                        <th>Passport_photo</th>
                        <th>Mykid</th>
                        <th>Birt Certificate</th>
                        <th>Pay Slip</th>
                        <th>Health Record</th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["file_id"]."</td>
                            <td>".$row["passport"]."</td>
                            <td>".$row["mykid"]."</td>
                            <td>".$row["birth_certificate"]."</td>
                            <td>".$row["pay_slip"]."</td>
                            <td>".$row["health_record"]."</td>
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
