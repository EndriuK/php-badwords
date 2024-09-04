<?php 

$testo = $_GET['testo'];
$censura = $_GET['censura'];


$parolaCensurata = str_replace($censura, "***", $testo);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati</title>
</head>
<body>
    <h2>Questo è il testo che è stato scritto</h2>
    <p><?php echo $testo ?></p>
    <h4>Questa è la lunghezza del testo scritto</h4>
    <p><?php echo strlen($testo) ?></p>
    <h4>Questo è il testo modificato</h4>
    <p><?php echo $parolaCensurata ?></p>
    <h4>Questa è la lunghezza del testo modificato</h4>
    <p><?php echo strlen($parolaCensurata) ?></p>

</body>
</html>