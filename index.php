<?php 

    include_once(__DIR__ . '/classes/Tshirt.php');
    include_once(__DIR__ . '/classes/Service.php');

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
    <?php $product = new Product('988271', 'Shoes', '33.23') ?>
    <?php $tshirt = new Tshirt('98291', 'AA32-12', '15.22', 'M', 'blue') ?>
    <?php echo $tshirt->get_size() ?>
    <?php echo $product->get_name() ?>
    <?php echo $product->get_id() ?>
    <?php echo $product->get_price() ?>
</body>
</html>