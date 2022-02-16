<?php

    require_once __DIR__ . "/classes/User.php";
    require_once __DIR__ . "/classes/Product.php";

    try {
        $redUser = new User ('Francesco', 'Filauro', 'filauro1989@gmail.com', new Card(1234567896326547, 546, 20/05/2028));

        $firstProduct = new Product('Cacciavite', 15);

    } catch (Exception $error) {
        
        echo $error->getMessage();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <li><?php echo $redUser->getName() ?></li>
        <li><?php echo $redUser->getLastName() ?></li>
        <li><?php echo $redUser->getAddress() ?></li>
        <li><?php echo $redUser->getPhoneNumber() ?></li>
        <li><?php echo $redUser->getEmail() ?></li>
        <li><?php var_dump($redUser->getCard()) ?></li>
    </ul>
    
</body>
</html>
