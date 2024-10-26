<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribution Page</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <?php include "./include/navbar.php" ; ?>
    <div class="body_contribution">
        <div class="contribution-image-container">
            <!-- Left section with the image -->
            <div class="contribution-image-section">
                <img src="./images/contribution-herbarium.jpg" alt="Herbarium" class="contribution-image">
            </div>
    
            <div class="contribution-form-section">
                <h1 class="h1-contribution">Contribution Page</h1>
                <p>Please fill out the form below to contribute plant information to the herbarium collection.</p>
    
                <form class="form-contribution" action="/submit-contribution" method="post" enctype="multipart/form-data">
                    <!-- Plant Name -->
                    <label class="label-contribution" for="plantName">Plant Name:</label>
                    <input class="input-contribution" type="text" id="plantName" name="plantName" maxlength="25"
                        pattern="[A-Za-z\s]+" required placeholder="Enter the plant name">
    
                    <!-- Plant Family -->
                    <label class="label-contribution" for="plantFamily">Plant Family:</label>
                    <select class="select-contribution" id="plantFamily" name="plantFamily" required>
                        <option value="">Select Family</option>
                        <option value="Dipterocarpaceae">Dipterocarpaceae</option>
                        <option value="Lauraceae">Lauraceae</option>
                        <option value="Burseraceae">Burseraceae</option>
                    </select>
    
                    <!-- Plant Genus -->
                    <label class="label-contribution" for="plantGenus">Plant Genus:</label>
                    <select class="select-contribution" id="plantGenus" name="plantGenus" required>
                        <option value="">Select Genus</option>
                        <option value="Vatica">Vatica</option>
                        <option value="Dipteroarpus">Dipteroarpus</option>
                        <option value="Hopea">Hopea</option>
                        <option value="Actinodaphne">Actinodaphne</option>
                        <option value="Endiandra">Endiandra</option>
                        <option value="Beilshmiedia">Beilshmiedia</option>
                        <option value="Canarium">Canarium</option>
                        <option value="Dacryodes">Dacryodes</option>
                        <option value="Santiria">Santiria</option>
                    </select>
    
                    <!-- Plant Species -->
                    <label class="label-contribution" for="plantSpecies">Plant Species:</label>
                    <select class="select-contribution" id="plantSpecies" name="plantSpecies" required>
                        <option value="">Select Species</option>
                        <option value="Vatica mangachapoi">Vatica mangachapoi</option>
                        <option value="Vatica rassak">Vatica rassak</option>
                        <option value="Dipterocarpus alatus">Dipterocarpus alatus</option>
                        <option value="Dipterocarpus grandiflorus">Dipterocarpus grandiflorus</option>
                        <option value=" Hopea odorata"> Hopea odorata</option>
                        <option value="Hopea helferi">Hopea helferi</option>
                        <option value="Actinodaphne pruinosa">Actinodaphne pruinosa</option>
                        <option value="Actinodaphne lancifolia">Actinodaphne lancifolia</option>
                        <option value="Endiandra globosa">Endiandra globosa</option>
                        <option value="Endiandra palmerstonii">Endiandra palmerstonii</option>
                        <option value="Beilschmiedia tarairi ">Beilschmiedia tarairi </option>
                        <option value="Beilschmiedia tawa">Beilschmiedia tawa</option>
                        <option value="Canarium ovatum">Canarium ovatum</option>
                        <option value="Canarium luzonicum">Canarium luzonicum</option>
                        <option value="Dacryodes edulis">Dacryodes edulis</option>
                        <option value="Dacryodes longifolia">Dacryodes longifolia</option>
                        <option value="Santiria latex">Santiria latex</option>
                        <option value="Santiria bengalensis">Santiria bengalensis</option>
                    </select>

                    <p>Photo Upload (Fresh Leaf)</p>
                    <div class="contribution-photo-upload">
                        <p><strong>Choose a photo or drag it here</strong></p>
                        <label class="label-contribution" for="freshLeafPhoto">
                            <span class="contribute-icon">⇧</span> 
                            <input class="input-contribution" type="file" id="freshLeafPhoto" name="freshLeafPhoto" accept="image/*" required>
                        </label>
                    </div>

                    <p>Photo Upload (Herbarium)</p>
                    <div class="contribution-photo-upload">
                        <p><strong>Choose a photo or drag it here</strong></p>
                        <label class="label-contribution" for="herbariumPhoto">
                            <span class="contribute-icon">⇧</span>
                            <input class="input-contribution" type="file" id="herbariumPhoto" name="herbariumPhoto" accept="image/*" required>
                        </label>
                    </div>
    
                    <!-- Submit Button -->
                    <button class="button-contribution" type="submit">Submit Contribution</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "./include/footer.php" ; ?>

</body>

</html>
