<!DOCTYPE html>

<html lang="en" class="identifypage_kaiseng">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Kai Seng">
	<meta name="description" content="Identify Herbarium">
	<meta name="keywords" content="keyword1, keyword2, keyword3, etc">
    <title>Identify Page</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body class="identify">
   <?php include "./include/navbar.php" ?>
  
<body class="identify">
<?php
$pageTitle = "Herbarium Identification Guide";
$pageIntro = "An introduction to identifying and cataloging plant specimens for herbariums.";
$identificationSteps = [
    "Leaf shape and arrangement",
    "Flower structure and color",
    "Fruit or seed appearance",
    "Stem type and branching"
];
$plantInfo = [
    "scientificName" => "Rosa Rubiginosa",
    "commonName" => "Sweetbriar Rose",
    "accuracy" => "88.33%"
];
$plantImages = [
    ["path" => "images/SweetBriarRose.jpg", "alt" => "Sweetbriar Rose - Image 1"],
    ["path" => "images/SweetBriarRose2.jpg", "alt" => "Sweetbriar Rose - Image 2"],
    ["path" => "images/SweetBriarRose3.jpg", "alt" => "Sweetbriar Rose - Image 3"]
];

}
?>
    <header>
        <h1><?php echo $pageTitle; ?></h1>
        <p><?php echo $pageIntro; ?></p>
    </header>

    <div class="identify_container">
        <section>
            <figure class="identify">
                <img src="images/driedherbarium1.jpg" alt="Dried plant specimen in a herbarium sheet">
                <figcaption>A dried plant specimen mounted on a herbarium sheet.</figcaption>
            </figure>

            <h2>How to Identify a Specimen</h2>
            <p>When identifying a plant for a herbarium, several characteristics must be closely observed:</p>
            <ol>
                <?php foreach ($identificationSteps as $step): ?>
                    <li><?php echo $step; ?></li>
                <?php endforeach; ?>
            </ol>
        </section>
    </div>

    <div class="identify_container">
        <h3>Plant Identification Tool</h3>
        <div class="upload-section">
            <div class="upload-section">
            <?php if (!empty($message)): ?>
                <p><?php echo $message; ?></p>
            <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="plant-photo">Upload a Plant Photo:</label><br><br>
                <input type="file" name="plant_photo" id="plant-photo" accept="image/*"><br><br>
                <input type="submit" value="Submit Photo">
            </form>
			</div>
		</div>
	</div>
	
    <div class="identify_container">
        <div class="result">
            <h4>Plant Identification Result</h4>

            <!-- Plant Information Section -->
            <section class="plant-info">
                <p><strong>Scientific Plant Name: </strong><?php echo $plantInfo["scientificName"]; ?></p>
                <p><strong>Common Name:</strong> <?php echo $plantInfo["commonName"]; ?></p>
            </section>

            <!-- Herbarium Specimens Gallery -->
            <section class="herbarium-gallery">
                <h5>Plant Identified:</h5>
                <div class="gallery">
                    <?php foreach ($plantImages as $image): ?>
                        <img src="<?php echo $image["path"]; ?>" alt="<?php echo $image["alt"]; ?>">
                    <?php endforeach; ?>
                </div>
                <p><strong>Result Accuracy: <?php echo $plantInfo["accuracy"]; ?></strong></p>
            </section>
        </div>

</div>
</body>
</html>

    <footer>
         <?php include "./include/footer.php" ?>
    </footer>
    </body>
</html>
