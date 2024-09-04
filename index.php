<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./badwords.php" method="GET">
                    <div class="row">
                        <div class="col-4">
                            <input type="text" class="form-control" name="nome" placeholder="Nome"> 
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="cognome" placeholder="Cognome">
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