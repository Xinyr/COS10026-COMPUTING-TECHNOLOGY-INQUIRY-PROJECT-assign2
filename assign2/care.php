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
<body>
<body class="care_page">
   <?php include "./include/navbar.php" ?>

    <header>
        <h1><?php echo"How to Preserve Your Herbarium"; ?></h1>
    </header>

    <article>
        <section id="preservation-techniques">
            <h2>Preservation Techniques</h2>
            <p><strong>Proper preservation techniques ensure that herbarium specimens remain intact and informative for future studies.</strong></p>
            <figure>
                <img src="<?php echo "images/herbarium_preservation.jpg" ; ?>" alt="<?php echo "Preserving Herbarium Specimens"; ?>">
                <figcaption><?php echo "Techniques for preserving herbarium specimens effectively." ?></figcaption>
                <p>Image Source: <a href="https://www.bing.com/images" target="_blank">Example Source</a></p>
            </figure>
        </section>

        <section id="storage">
            <h2>Guidelines of Keeping</h2>
            <ol>
                <li><strong>Climate Control:</strong> Maintain a stable temperature and humidity level to prevent mold and decay.</li>
                <li><strong>Light Exposure:</strong> Store specimens in a dark or low-light environment to avoid fading and degradation.</li>
                <li><strong>Physical Protection:</strong> Use archival-quality boxes and folders to protect specimens from dust and handling damage.</li>
            </ol>
        </section>

        <section id="maintenance">
            <h2>Ongoing Maintenance</h2>
            <p>Regular maintenance is essential to ensure the continued preservation of herbarium collections.</p>
            <ol>
                <li>Inspect specimens periodically for signs of damage or deterioration.</li>
                <li>Ensure that storage areas remain clean and free from pests.</li>
                <li>Update labels and documentation as needed to reflect any changes or additional information.</li>
            </ol>
        </section>

        <section id="common-issues">
            <h2>Common Preservation Issues</h2>
            <dl>
                <dt>Mold Growth</dt>
                <dd>Occurs in high humidity environments; prevent by controlling moisture levels.</dd>
                <dt>Insect Damage</dt>
                <dd>Pests can damage specimens; use appropriate pest control measures.</dd>
                <dt>Fading</dt>
                <dd>Exposure to light can cause colors to fade; store specimens away from direct light.</dd>
            </dl>
        </section>

        <aside>
            <h3>Importance of Proper Care</h3>
            <p>Maintaining herbarium specimens in optimal conditions ensures their availability for ongoing and future scientific research, education, and reference. Learn more from the video guide here: <a href="<?php echo "https://www.youtube.com/watch?v=6Rnhz-mdg4c"; ?>" target="_blank">Video Guide</a>.</p>
        </aside>

    </article>
<footer>
        <?php include "./include/footer.php" ?>
 </footer>
 </body>
</html>
