<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Assignment 1" />
        <meta name="keywords" content="Herbarium, plants classification" />
        <meta name="authors" content="Frederick Bartholomew Sii Dao Xiang" />
        <title>Plants Classification</title>
        <link rel="icon" type="image/x-icon" href="./images/favicon.png">
        <link rel="stylesheet" href="./styles/style.css" />
    </head>
    <body class="classification_body">
        <?php include "./include/navbar.inc" ?>
        <header class="classification_header">
            <h1>Plants Classification</h1>
        </header>
        <div class="classification_container">
            <div class="classification">
            <p>The plant kingdom is so diverse and varied, biologists and taxonomists have developed a system to help them communicate information about plants with each other.
            <br />
            <br />
            Often, they are grouped by usage or characteristics of the plant including plant structure, growth patterns and even leaf shedding characteristics.</p>
            <aside>Did you know? Dicotyledons have a center vein with branching veins, while Monocotyledons have parallel veins.</aside>
            <figure><img src="images/plants_classification.jpg" alt="plant classification image">
                <figcaption>Fig.1 - Plant classification visualized.</figcaption>
            </figure>
            <h2>How are plants classified?</h2>
            <p>The plant kingdom is divided into two orders: Dicotyledons and Monocotyledons. Dicotyledons are the most common order, making up two thirds of the plant kingdom, and their name comes from the fact that their seedlings have two seed leaves. Monocotyledons make up the remaining third of the plant kingdom, and their seedlings only have one seed leaf.</p>
            <dl>
                <dt>Families</dt>
                    <dd>Families are categories within each order, and family names suffix with a "aceae". Members of the same family share many similarities.</dd>
                <dt>Genus</dt>
                    <dd>Families are further subdivided into genus, and genus names should always be captialized. Genus can be thought of as the "group" of the same plants.</dd>
                <dt>Species</dt>
                    <dd>Species even further distinguishes plants in a genus group to be an individual. Species is written after the genus name.</dd>
            </dl>
            <br />

            <h2>Classificaton example</h2>
            <aside>For example, <em>Vatica (genus)</em> <em>chinensis (species)</em> is in the family <em>Dipterocarpaceae</em></aside>
            <figure><img src="./images/dipterocarp.jpg" alt="dipterocarp">
                <figcaption>Fig.2 - Dipterocarp forest in Danum Valley, Sabah, Malaysia.</figcaption>
            </figure>
            <ol>
                <li>Family: Dipterocarpaceae are broad leaved evergreen trees, with aromatic resins. They tend to grow as emergent trees in rainforests in small clusters, and are the dominant tree in Southeast Asia.</li>
            </ol>
            <figure><img src="./images/vatica.jpg" alt="vatica">
                <figcaption>Fig.3 - <em>Vatica chinensis</em></figcaption>
            </figure>
            <ol start="2">
                <li>Genus: <em>Vatica</em> leaves are webbed, thinly elliptical</li>
            </ol>

                <figure><img src="./images/vatica_chinensis.jpg" alt="vatica chinensis">
                    <figcaption>Fig.4 - <em>Vatica chinensis</em> specimen in a herbarium entry.</figcaption>
                </figure>
            <ol>
                <li>Species: <em>Vatica chinensis</em> is a critically endangered species of resinous hardwood tree that is harvested for its timber and occasionally its sap.</li>
            </ol>
            
            </div>
        </div>
        <?php include "./include/footer.inc" ?>
    </body>
</html>