<?php

//:::REQUIRE:::
require_once 'cfg.php';
require_once '../lib/functions.inc.php';

$files = get_files($cfg['dir']['base'].$cfg['dir']['img']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Carousel Example (<?php print count($files); ?>)</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!--<ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>-->

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
<?php

$i = 0;
foreach ($files as $file) {
    if ($i > 0) {
        print '
                <div class="item">
                    <img src="'.$cfg['dir']['img'].$file.'" alt="'.$file.'" style="width:100%;">
                </div>
';
    } else {
        print '
                <div class="item active">
                    <img src="'.$cfg['dir']['img'].$file.'" alt="'.$file.'" style="width:100%;">
                </div>
';
    }
    $i++;
}

?>

            </div><!-- carousel-inner -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- carousel -->
    </div><!-- container -->

</body>

</html>
