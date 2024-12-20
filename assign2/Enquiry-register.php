<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include "./include/navbar.inc"; ?>
    <?php include ('Database.php'); ?>

    <div class="body_enquiry">
        <div class="enquiry_image-container">
            <!-- Left section with the image -->
            <div class="enquiry_image-section">
                <img src="./images/Herbarium_image.jpg" alt="Herbarium" class="enquiry-image">

            </div>

            <!-- Right section with the enquiry form -->
            <div class="enquiry_form-section">
                <h2 class="enquiry_h2">Enquiry Form</h2>

                <form class="form_enquiry" action="Enquiry-confirm.php" method="post">
                    <label class="label_enquiry" for="firstName">First Name:</label>
                    <input class="input_enquiry" type="text" id="firstName" name="firstName" maxlength="25" pattern="[A-Za-z]+" required
                        placeholder="e.g. John">

                    <label class="label_enquiry" for="lastName">Last Name:</label>
                    <input class="input_enquiry" type="text" id="lastName" name="lastName" maxlength="25" pattern="[A-Za-z]+" required
                        placeholder="e.g. Smith">

                    <label class="label_enquiry" for="email">Email Address:</label>
                    <input class="input_enquiry" type="email" id="email" name="email" required placeholder="e.g. john123@gmail.com">

                    <fieldset class="fieldset_enquiry">
                        <legend>Address</legend>
                        <label class="label_enquiry" for="streetAddress">Street Address:</label>
                        <input class="input_enquiry" type="text" id="streetAddress" name="streetAddress" maxlength="40" required
                            placeholder="e.g. No.43, Lorong 4, Jalan Tabuan Jaya">

                        <label class="label_enquiry" for="city">City/Town:</label>
                        <input class="input_enquiry" type="text" id="city" name="city" maxlength="20" required placeholder="e.g. Kuching">

                        <label class="label_enquiry" for="state">State:</label>
                        <select class="select_enquiry" id="state" name="state" required>
                            <option value="">Select State</option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Penang">Penang</option>
                            <option value="Perak">Perak</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terengganu">Terengganu</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Labuan">Labuan</option>
                            <option value="Putrajaya">Putrajaya</option>
                        </select>

                        <label class="label_enquiry" for="postcode">Postcode:</label>
                        <input class="input_enquiry" type="text" id="postcode" name="postcode" pattern="\d{5}" maxlength="5" required
                            placeholder="e.g. 12345">
                    </fieldset>

                    <label class="label_enquiry" for="phone">Phone Number:</label>
                    <input class="input_enquiry" type="tel" id="phone" name="phone" pattern="\d{10}" maxlength="10"
                        placeholder="e.g. 0123456789" required>

                    <label class="label_enquiry" for="tutorial">Tutorial:</label>
                    <select class="select_enquiry" id="tutorial" name="tutorial" required>
                        <option value="">Select Tutorial</option>
                        <option value="Tutorial">Tutorial</option>
                        <option value="Tools">Tools</option>
                        <option value="Care">Care</option>
                    </select>

                    <div class="enquiry-button-container">
                        <button class="button_enquiry" type="submit">Submit Enquiry</button>
                        <button class="button_enquiry enquiry_reset_button" type="reset">Reset</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <?php include "./include/footer.inc" ; ?>

</body>

</html>