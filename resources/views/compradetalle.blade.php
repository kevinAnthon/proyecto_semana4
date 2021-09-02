<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Esta en compra detalle</h2>
    <?php
        foreach($compradet as $value){
            echo $value->precio .'<br>';
        }
    ?>
</body>
</html>