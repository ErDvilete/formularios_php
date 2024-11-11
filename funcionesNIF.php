<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones NIF</title>
</head>
<body>
    <?php
    $NIF = $_POST["NIF"];

    function CalculaLetraDelNIF($numero){
        $resultado = "EL NIF introducido no es correcto";

        if (ctype_digit($numero) && strlen((string)$numero) == 8){
                
            $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
            $resultado = $letras[$numero % 23];
        }
        return $resultado;
    }
    

    function verificadorNIF($NIF){
        $valido = false;
        if ( ctype_digit($NIF) && strlen((string)$NIF) == 9){
            
            $letras = substr($NIF, -1);
            if ($letras == CalculaLetraDelNIF((int)substr($NIF, 0, 8))){
                $valido = true;
            }
        return $valido;
        }
    }   
    ?>
</body>
</html>