<?php 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./dati.php" method="GET">
                    <div class="row">
                        <div class="col-4">
                            <label for="testo" class="form-label">Inserisci testo</label>
                            <input type="text" class="form-control" name="testo" id="testo"> 
                        </div>
                        <div class="col-4">
                            <label for="censura" class="form-label">Parola da censurare</label>
                            <input type="text" class="form-control" name="censura" id="censura">
                        </div>
                        <div class="col-10 mt-3">
                            <button type="submit" class="btn btn-primary">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>