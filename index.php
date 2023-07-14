<?php
    include_once __DIR__ . '/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">

    <title>Zoo Planet</title>
</head>
<body>
<div class="container text-center">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>
                    Zoo Planet
                </h1>
            </div>
            <div class="col-12">
                <h2>
                    Reparto <?php echo $animals[0]->animal; ?>
                </h2>
            </div>
            <?php foreach ($itemsdog as $item) { ?>
                <div class="card col-3 p-0 m-3" >
                    <div class="card-header">
                        <?php echo $item->category->name; ?>
                    </div>
                    <img src="<?php echo $item->img; ?>"  class="card-img-top rounded-0" alt="<?php echo $item->title; ?>">
                    <div class="card-body p-3">
                        <h5 class="card-title">
                            <?php echo $item->title; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 ">
                            <?php echo $item->price; ?>€
                            
                        </h6>
                        <p class="card-text">
                            <?php echo $item->category->name; ?> per <?php echo $item->animals->animal; ?>
                        </p>
                        <a href="#" class="btn btn-success">
                            Compra
                        </a>
                    </div>
                </div>
            <?php } ?>
            <div class="col-12">
                <h2>
                    Reparto <?php echo $animals[1]->animal; ?>
                </h2>
            </div>
            <?php foreach ($itemscat as $item) { ?>
                <div class="card col-3 p-0 m-3" >
                    <div class="card-header">
                        <?php echo $item->category->name; ?>
                    </div>
                    <img src="<?php echo $item->img; ?>"  class="card-img-top rounded-0" alt="<?php echo $item->title; ?>">
                    <div class="card-body p-3">
                        <h5 class="card-title">
                            <?php echo $item->title; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 ">
                            <?php echo $item->price; ?>€
                            
                        </h6>
                        <p class="card-text">
                            <?php echo $item->category->name; ?> per <?php echo $item->animals->animal; ?>
                        </p>
                        <a href="#" class="btn btn-primary">
                            Read more...
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>