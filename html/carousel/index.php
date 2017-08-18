<?php

// ::: REQUIRE :::
require_once '../inc/default.inc.php';

$imgdir = $cfg['dir']['base'].$cfg['dir']['pic'];
$files = get_files($imgdir);

?>

<!DOCTYPE html>
<html lang="et-EE">

<head><?php include $cfg['dir']['inc'].'header.inc.php'; ?>
    <title>Carousel Example</title>
</head>

<body>

    <div class="container">
        <h2>Carousel Example (<?php echo count($files); ?>)</h2>
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
        echo '
                <div class="item">
                    <img src="'.$imgdir.$file.'" alt="'.$file.'" style="width:100%;">
                </div>
';
    } else {
        echo '
                <div class="item active">
                    <img src="'.$imgdir.$file.'" alt="'.$file.'" style="width:100%;">
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
    <?php include $cfg['dir']['inc'].'footer.inc.php'; ?>
</body>

</html>
