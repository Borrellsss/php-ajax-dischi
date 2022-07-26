<?php
    // var_dump(__DIR__);
    require __DIR__ . '/database.php';

    // var_dump($discs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="flex">
            <div class="header-logo">
                <img src="https://pnggrid.com/wp-content/uploads/2021/05/Spotify-PNG-Logo-768x767.png" alt="Spotify Logo">
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="container">
                <div class="flex">
                    <?php foreach($discs as $disc) { ?>
                        <div class="album">
                            <div class="album-cover">
                                <img src="<?php echo $disc["poster"] ?>" alt="<?php echo $disc["genre"] ?>">
                            </div>
                            <div class="album-text">
                                <div class="album-title">
                                    <h2>
                                        <?php echo $disc["title"] ?>
                                    </h2>
                                </div>
                                <div class="album-info">
                                    <div class="album-author">
                                        <span>
                                            <?php echo $disc["author"] ?>
                                        </span>
                                    </div>
                                    <div class="album-date">
                                        <span>
                                            <?php echo $disc["year"] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>