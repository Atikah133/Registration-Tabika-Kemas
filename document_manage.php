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
                    <li class="breadcrumb-item active" aria-current="page">Documents</li>
                </ol>
            </nav>
            <div>
                <a class="btn btn-primary"  href="document_manage.php" role="button">Document</a>
                <a class="btn btn-primary"  href="document_read.php" role="button">View the Document</a>
                <a class="btn btn-primary" href="document_update.php" role="button">Update the Document</a>
                <a class="btn btn-primary" href="document_delete.php" role="button">Delete the Document</a>
            <div>
            <br>
            <div id="Create" class="tabcontent">
                <form action="document_create.php" method="POST" enctype="multipart/form-data">
                    <h3>File Upload</h3>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Passport Photos</label>
                            <input class="form-control" name="passport" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Copy of Mykid</label>
                            <input class="form-control" name="mykid" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Copy of child's birth certificate</label>
                            <input class="form-control" name="birth_certificate" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Parents' salary slip</label>
                            <input class="form-control"  name="pay_slip" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Child health records</label>
                            <input class="form-control" name="health_record" type="file" id="formFileMultiple" multiple>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success" value="Upload">
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
