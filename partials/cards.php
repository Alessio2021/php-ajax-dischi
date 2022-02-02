<?php
include __DIR__ . '/../server/db.php';
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
    <?php foreach ($cards as $card) { ?>
        <div class="col text-center p-3">
            <div class="card cards p-3">
                <img src="<?= $card['poster'] ?>" alt="">
                <h1 class="fw-bold text-light fs-4 pt-2"><?= $card['title'] ?></h1>
                <h5 class="text-secondary"><?= $card['author'] ?></h5>
                <h6 class="text-secondary"><?= $card['year'] ?></h6>
            </div>
        </div>
    <?php } ?>
</body>

</html>