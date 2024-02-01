<?php
require_once __DIR__ . '/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container-lg">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-4 py-3">
                    <div class="card" style="width: 18rem;">

                        <?php echo '<img src="'.$product->img.'" class="card-img-top" alt="">' ?>

                        <div class="card-body">

                            <h6 class="card-title"><?php echo $product->name ?></h6>
                            <div class="card-text"><?php echo 'Prezzo: '.$product->price.'$'?></div>
                            <div class="card-text h-50 "><?php echo 'Descrizione: '.$product->description ?></div>

                            <?php if (get_class($product) == 'Food') {?>
                                <div><?php echo 'Quantità: '.$product->amount.'g';?></div>
                            <?php }?>

                            <?php if (get_class($product) == 'Toy') {?>
                                <div><?php echo 'Materiale: '.$product->material;?></div>
                            <?php }?>
                            
                            <div class="text-center">
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>