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
                    <li class="breadcrumb-item active" aria-current="page">Declaration</li>
                </ol>
            </nav>
            <div>
                <a class="btn btn-primary"  href="declaration_manage.php" role="button">Declaration</a>
                <a class="btn btn-primary"  href="declaration_read.php" role="button">View the Declaration</a>
                <a class="btn btn-primary" href="declaration_delete.php" role="button">Delete the Declaration</a>
            <div>
            <br>
            <div id="Create" class="tabcontent">
                <form action="declaration_create.php" method="POST">
                    <h2>Section C: Declaration</h2><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">I acknowledge that all details provided are true and that I will be subject to action if this information is false.</label>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">If my child is accepted, I certify that I "meet/do not meet the eligibility requirements" for the Per Capita Grant assistance recipient.</label>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"> If my child is accepted, I will help actively participate in the implementation of TABIKA KEMAS programs and activities.</label>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">I allow my child to receive health service treatment/injections/naman caca (if not already done) and other treatments that are deemed necessary.</label>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">I allow my child to be taken on a tour by the teacher along with other children during school hours.</label>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"> If an accident occurs to a child outside of school hours and the nursery area, it is the responsibility of the parents/guardian.</label>
                    </div><br>
                        
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
