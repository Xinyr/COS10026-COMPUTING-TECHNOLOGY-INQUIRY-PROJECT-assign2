<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Assignment 1" />
        <meta name="keywords" content="Herbarium, Login" />
        <meta name="authors" content="Frederick Bartholomew Sii Dao Xiang" />
        <title>Herbarium</title>
        <link rel="icon" type="image/x-icon" href="./images/favicon.png">
        <link rel="stylesheet" href="./styles/style.css" />
    </head>
    <body class="index_body">
    <?php include "./include/navbar.php" ?>
    <?php include "./Database.php" ?>
        
        <iframe src="backgroundimage.html" title="index page background"></iframe>
        <!-- iframes are used here to help mitigate the blurry edges of a blurred image -->
        <div>
            <div id="slideshow">
                <div class="slide-wrapper">
                  <div class="slide"><img class="slide-img" src="./images/slideshow_1.jpg" alt="Western Australian Herbarium"></div>
                  <div class="slide"><img class="slide-img" src="./images/slideshow_2.jpg" alt="Freshly pressed wildflower"></div>
                  <div class="slide"><img class="slide-img" src="./images/slideshow_3.jpg" alt="Australia National Herbarium"></div>
                  <div class="slide"><img class="slide-img" src="./images/slideshow_4.jpg" alt="Atlas of Florida Plants"></div>
                  <div class="slide"><img class="slide-img" src="./images/slideshow_5.jpg" alt="Persicaria labathifolia (Linnaeus) Delarbre"></div>
                </div>
            </div>
        </div>
    <?php include "./include/footer.php" ?>
    </body>
</html>