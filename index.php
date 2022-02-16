<?php

    require_once __DIR__ . "/classes/User.php";
    require_once __DIR__ . "/classes/Product.php";

    try {
        $redUser = new User ('Francesco', 'Filauro', 'filauro1989@gmail.com', new Card(1234567896326547, 546, 20/05/2028));

        var_dump($redUser);

        $firstProduct = new Product('Cacciavite', 15);

        var_dump($firstProduct);

    } catch (Exception $error) {
        
        echo $error->getMessage();

    }

?>
