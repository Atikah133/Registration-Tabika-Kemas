
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
                <li class="breadcrumb-item"><a href="child_manage.php">Children's Information</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
        <div>
                <a class="btn btn-primary" href="child_manage.php"  role="button">Children's Personal Information</a>
                <a class="btn btn-primary"  href="child_read.php" role="button">View the Information</a>
                <a class="btn btn-primary" href="child_update.php" role="button">Update the Information</a>
                <a class="btn btn-primary" href="child_delete.php" role="button">Delete the Information</a>
        <div>
        <br>
        <h2>Part A: Child's Personal Details</h2>
        <h4>Children's Information</h4>
        <table class="table table-bordered border-primary">
            <?php
            include 'config.php';
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM child";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table><tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Citizen</th>
                        <th>Race</th>
                        <th>Date of Birth</th>
                        <th>Birth Certificate No</th>
                        <th>Place of Birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Shirt Size</th>
                        <th>Disease</th>
                        <th>high</th>
                        <th>weight</th>
                        <th>Allergies</th>
                        <th>Disability</th>
                        <th>Contact Name</th>
                        <th>Contact Address</th>
                        <th>Phone</th>
                        <th>Relationship</th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["child_id"]."</td>
                            <td>".$row["name"]."</td>
                            <td>".$row["age"]."</td>
                            <td>".$row["citizen"]."</td>
                            <td>".$row["race"]."</td>
                            <td>".$row["date_of_birth"]."</td>
                            <td>".$row["birth_certificate_no"]."</td>
                            <td>".$row["place_of_birth"]."</td>
                            <td>".$row["gender"]."</td>
                            <td>".$row["address"]."</td>
                            <td>".$row["shirt_size"]."</td>
                            <td>".$row["disease"]."</td>
                            <td>".$row["high"]."</td>
                            <td>".$row["weight"]."</td>
                            <td>".$row["allergies"]."</td>
                            <td>".$row["disability"]."</td>
                            <td>".$row["contact_name"]."</td>
                            <td>".$row["contact_address"]."</td>
                            <td>".$row["contact_phone"]."</td>
                            <td>".$row["relationship"]."</td>
                            </tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No information detected.";
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
