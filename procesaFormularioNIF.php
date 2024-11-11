<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamienti NIF</title>
</head>
<body>
    <?php
    include "funcionesNIF.php";
    if (!empty($NIF)) {
        if (strlen($NIF) == 8) { 
            $letras = calculaLetraDelNIF($NIF);
            echo "La letra correspondiente al DNI es: " . $letras;
        } elseif (strlen($NIF) == 9) { 
            if (verificadorNIF($NIF)) {
                echo "El NIF es válido.";
            } else {
                echo "El NIF no es válido.";
            }
        } else {
            echo "El NIF introducido no es correcto.";
        }
    }
    if (empty($NIF)){ 
        echo 'NIF no introducido';
    }
    ?>
</body>
</html>