<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Esta en compra</h2>    
    <?php
        foreach($Compra as $value){
             echo $value->serie .'<br>';
        }
    ?>
</body>
</html>