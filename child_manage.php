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
                    <li class="breadcrumb-item active" aria-current="page">Children's Infortmation</li>
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
                <form action="child_create.php" method="POST" class="row g-3">
                            <!-- Section A: Personal Details -->
                        <h2>Part A: Child's Personal Details</h2>
                        <h4>Children's Information</h4>
                        <div class="col-md-10">
                            <label for="inputName4" class="form-label">Name</label>
                            <input type="name" class="form-control" id="inputname4" name="name">
                        </div>

                        <div class="col-md-3">
                            <label for="inputAge4" class="form-label">Age</label>
                            <input type="age" class="form-control" id="inputAge4"  name="age">
                        </div>
                                    
                        <div class="col-md-4">
                            <label for="inputCitizen4" class="form-label">Citizen</label>
                            <input type="citizen" class="form-control" id="inputCitizen4"  name="citizen">
                        </div>

                        <div class="col-md-4">
                            <label for="inputRace4" class="form-label">Race</label>
                            <input type="race" class="form-control" id="inputRace4"  name="race">
                        </div>
                                    
                        <div class="col-md-3">
                            <label for="inputDateofBirth4" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="inputDateofBirth4"  name="date_of_birth">
                        </div>

                        <div class="col-md-3">
                            <label for="inputBirthCertificateNo.4" class="form-label">Birth Certificate No.</label>
                            <input type="BirthCertificateNo." class="form-control" id="inputBirthCertificateNo.4"  name="birth_certificate_no">
                        </div>

                        <div class="col-md-3">
                            <label for="inputPlaceofBirth4" class="form-label">Place of Birth</label>
                            <input type="PlaceofBirh" class="form-control" id="inputPlaceofBirth4"  name="place_of_birth">
                        </div>
                                    
                        <fieldset class="row mb-2">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="girl">
                                <label class="form-check-label" for="gridRadios1">Girl</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2" >Boy</label>
                            </div>
                        </div>
                        </fieldset>

                        <div class="col-10">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress"  name="address" placeholder="House no. , Apartment, studio, or floor, city, code, state">
                        </div>
                                    
                        <fieldset class="row mb-4">
                            <legend class="col-form-label col-sm-2 pt-0">Shirt Size</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shirt_size" id="gridRadios1" value="S" >
                                    <label class="form-check-label" for="gridRadios1">
                                        S
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shirt_size" id="gridRadios2" value="M">
                                    <label class="form-check-label" for="gridRadios2">
                                        M
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shirt_size" id="gridRadios1" value="L" >
                                    <label class="form-check-label" for="gridRadios1">
                                        L
                                    </label>
                                </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="radio" name="shirt_size" id="gridRadios2" value="XL">
                                     <label class="form-check-label" for="gridRadios2">
                                         XL
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                                    
                        <!-- Health Section -->
                        <h3>Children's Health</h3>
                            <div>
                             <label>Mark the disease you are suffering from:</label><br>
                                <input type="checkbox" name="disease[]" value="Tired"> Tired<br>
                                <input type="checkbox" name="disease[]" value="Seizure"> Seizure<br>
                                <input type="checkbox" name="disease[]" value="Measles"> Measles<br>
                                <input type="checkbox" name="disease[]" value="No Disease"> No Disease<br><br>
                            </div>
                            <label>Children's physical:</label><br>
                            <div class="col-md-3">
                                <label for="inputHigh4" class="form-label">High (cm)</label>
                                <input type="High" class="form-control" name="high" id="inputHigh4">
                            </div>

                            <div class="col-md-3">
                                <label for="inputWeight4" class="form-label">Weight(kg)</label>
                                <input type="Weight" class="form-control"  name="weight" id="inputWeight4">
                            </div>

                            <label>Allergies:</label><br>
                            <div>
                                <input type="checkbox" name="allergies[]" value="Yes"> Yes<br>
                                <input type="checkbox" name="allergies[]" value="No"> No<br><br>
                            </div>

                            <label>Disability:</label><br>
                            <div>
                                <input type="checkbox" name="disability[]" value="Yes"> Yes<br>
                                <input type="checkbox" name="disability[]" value="No"> No<br><br>
                            </div>

                            <!-- Emergency contact -->
                            <h3>Emergency contact</h3>
                            <div class="col-md-10">
                                <label for="inputName4" class="form-label">Name</label>
                                <input type="name" class="form-control" name="contact_name" id="inputname4">
                            </div>

                            <div class="col-10">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" name="contact_address" id="inputAddress" placeholder="House no. , Apartment, studio, or floor, city, code, state">
                            </div>

                            <div class="col-md-3">
                                <label for="inputPhone4" class="form-label">Phone</label>
                                <input type="Phone" class="form-control" name="contact_phone" id="inputPhone4">
                            </div>

                            <label>Relationsip:</label>
                            <div>
                            <select name="relationship" required>
                                <option selected>None</option>
                                <option value="1">Mother</option>
                                <option value="2">Father</option>
                                <option value="3">Aunt</option>
                                <option value="4">Uncle</option>
                                <option value="5">Grandmother</option>
                                <option value="6">Grandfather</option>
                                <option value="7">Sister</option>
                                <option value="8">Brother</option>
                                <option value="9">Guardian</option>
                            </select><br><br>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-success" value="Submit">
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
