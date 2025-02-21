
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
                <li class="breadcrumb-item"><a href="declaration_manage.php">Declaration</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
        <div>
            <a class="btn btn-primary"  href="declaration_manage.php" role="button">Declaration</a>
            <a class="btn btn-primary"  href="declaration_read.php" role="button">View the Declaration</a>
            <a class="btn btn-primary" href="declaration_delete.php" role="button">Delete the Declaration</a>
        <div>
        <br>
        <h2>Section C: Declaration</h2><br>
        <table class="table table-bordered border-primary">
            <?php
            include 'config.php';
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM declaration";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table><tr>
                        <th>ID</th>
                        <th>Acknowledge</th>
                        <th>Eligibility Met</th>
                        <th>Participation Agreement</th>
                        <th>Health Service Permission</th>
                        <th>Tour Permission</th>
                        <th>Liability Agreement</th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["declaration_id"]."</td>
                            <td>".$row["acknowledge"]."</td>
                            <td>".$row["eligibility_met"]."</td>
                            <td>".$row["participation_agreement"]."</td>
                            <td>".$row["health_service_permission"]."</td>
                            <td>".$row["tour_permission"]."</td>
                            <td>".$row["liability_agreement"]."</td>
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
