<?php 
/* data request from db folder */
require __DIR__ . '/./db/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP dischi</title>
    </head>
    <body>
        <!-- header by include -->
        <?php include __DIR__ . '/partials/header.php'; ?>
        <!-- /header by include -->

        <!-- main -->
        <main>
            <div class="container">
                <section class="discs"> 
                    <?php 
                    foreach($discs as $disc) {
                    ;?>
                        <div class="disc">
                            <div class="disc-poster">
                                <?= $disc["poster"] ?>
                            </div>
                            <div class="disc-info">
                                <h3 class="author"><?= $disc["author"]; ?></h3>
                                <h5 class="title"><?= $disc["title"]; ?></h5>
                                <h5 class="genre"><?= $disc["genre"]; ?></h5>
                                <h6 class="year"><?= $disc["year"]; ?></h6>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
        </main>
        <!-- /main -->
    </body>
</html>