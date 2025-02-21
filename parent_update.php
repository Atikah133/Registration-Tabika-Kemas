<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $parent_id = $_POST['parent_id'];
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
    $mother_income = $_POST['mother_monthly_income'];
    $mother_phone = $_POST['mother_phone'];
    $mother_status = isset($_POST['mother_status']) ? implode(',', $_POST['mother_status']) : '';
    $mother_address = $_POST['mother_address'];
    
    $sql = "UPDATE parent_guardian SET father_name='$father_name', father_ic_no='$father_ic_no', father_citizen='$father_citizen', father_race='$father_race', father_job='$father_job',
            father_monthly_income='$father_monthly_income', father_phone='$father_phone', father_status='$father_status', father_address='$father_address', mother_name='$mother_name', 
            mother_ic_no='$mother_ic_no', mother_citizen='$mother_citizen', mother_race='$mother_race', mother_job='$mother_job', mother_monthly_income='$mother_monthly_income', 
            mother_phone='$mother_phone', mother_status='$mother_status', mother_address='$mother_address' WHERE parent_id='$parent_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Information updated successfully'); window.location.href = 'parent_read.php';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href = 'parent_read.php';</script>";
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
                    <li class="breadcrumb-item"><a href="parent_manage.php">Parent/Guardian's Information</a></li>
                    <li class="breadcrumb-item"><a href="parent_read.php">View</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>
            <div>
                <a class="btn btn-primary"  href="parent_manage.php" role="button">Parent/Guardian's Personal Information</a>
                <a class="btn btn-primary"  href="parent_read.php" role="button">View the Information</a>
                <a class="btn btn-primary" href="parent_update.php" role="button">Update the Information</a>
                <a class="btn btn-primary" href="parent_delete.php" role="button">Delete the Information</a>
            <div>
            <br>
            <div id="Create" class="tabcontent">
                <form action="parent_update.php" method="POST" class= "row g-6">
                    <h2>Section B: Family Income</h2>
                    <h4>Family Information</h4>
                    <div>
                        <label for="parent_id">Parent ID:</label>
                        <input type="number" id="parent_id" name="parent_id" required><br><br>
                    </div>
                    <div class="col-md-10">
                        <label for="inputName4" class="form-label">Father/guardian's Name</label>
                        <input type="name" class="form-control" id="inputname4" name="father_name">
                    </div>

                    <div class="col-md-3">
                        <label for="inputI/CNo4" class="form-label">I/C No.</label>
                        <input type="I/CNo" class="form-control" id="inputI/CNo4" name="father_ic_no">
                    </div>
                                        
                    <div class="col-md-4">
                        <label for="inputCitizen4" class="form-label">Citizen</label>
                        <input type="citizen" class="form-control" id="inputCitizen4" name="father_citizen">
                    </div>

                    <div class="col-md-4">
                        <label for="inputRace4" class="form-label">Race</label>
                        <input type="race" class="form-control" id="inputRace4" name="father_race">
                    </div>
                                        
                    <div class="col-md-3">
                        <label for="inputJob4" class="form-label">Job</label>
                        <input type="text" class="form-control" id="inputJob4" name="father_job">
                    </div>

                    <div class="col-md-3">
                        <label for="inputMonthlyIncome4" class="form-label">Monthly Income (RM)</label>
                        <input type="text" class="form-control" id="inputMonthlyIncome4" name="father_monthly_income">
                    </div>

                    <div class="col-md-3">
                        <label for="inputPhone4" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="inputPhone4" name="father_phone">
                    </div>

                    <br><br>
                    <div class="col-md-4">
                        <label>Status:</label>
                        <input type="checkbox" name="father_status[]" value="Married"> Married
                        <input type="checkbox" name="father_status[]" value="Widow"> Single father
                        <input type="checkbox" name="father_status[]" value="single"> Single<br>
                    </div>

                    <div class="col-10">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="father_address" placeholder="House no. , Apartment, studio, or floor, city, code, state">
                    </div><br><br>
                                    
                    <!-- mother information -->
                    <div class="col-md-10">
                        <label for="inputName4" class="form-label">Mother/guardian's Name</label>
                        <input type="name" class="form-control" id="inputname4" name="mother_name">
                    </div>

                    <div class="col-md-3">
                        <label for="inputI/CNo4" class="form-label">I/C No.</label>
                        <input type="I/CNo" class="form-control" id="inputI/CNo4" name="mother_ic_no">
                    </div>
                                        
                    <div class="col-md-4">
                        <label for="inputCitizen4" class="form-label">Citizen</label>
                        <input type="citizen" class="form-control" id="inputCitizen4" name="mother_citizen">
                    </div>

                    <div class="col-md-4">
                        <label for="inputRace4" class="form-label">Race</label>
                        <input type="race" class="form-control" id="inputRace4" name="mother_race">
                    </div>
                                        
                    <div class="col-md-3">
                        <label for="inputJob4" class="form-label">Job</label>
                        <input type="text" class="form-control" id="inputJob4" name="mother_job">
                    </div>

                    <div class="col-md-3">
                        <label for="inputMonthlyIncome4" class="form-label">Monthly Income (RM)</label>
                        <input type="text" class="form-control" id="inputMonthlyIncome4" name="mother_monthly_income">
                    </div>

                    <div class="col-md-3">
                        <label for="inputPhone4" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="inputPhone4" name="mother_phone">
                    </div>

                    <br><br>
                    <div class="col-md-4">
                        <label>Status:</label>
                        <input type="checkbox" name="father_status[]" value="Married"> Married
                        <input type="checkbox" name="father_status[]" value="Widow"> Single Mother
                        <input type="checkbox" name="father_status[]" value="single"> Single<br>
                    </div>

                    <div class="col-10">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="mother_address" placeholder="House no. , Apartment, studio, or floor, city, code, state">
                    </div>
                    <br><br>  
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-warning" value="Update">
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