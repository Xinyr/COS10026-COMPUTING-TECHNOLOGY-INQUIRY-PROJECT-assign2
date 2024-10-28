<?php 
echo '
<div class="navbar">
<ul>
    <li><a href="./main.php" class="logo_img"><img src="./images/logo.jpg" alt="home page logo"></a></li>
    <li><a href="./plants_classification.php">Plants Classification</a></li>
    <li>
        <div class="dropdown">
            <button type="button" class="dropbtn">
                Tutorial
            </button>
            <div class="dropdown-content">
                <a class="dropdown_link" href="./Tutorialnew.html">How to make a herbarium</a>
                <a class="dropdown_link" href="./Tools.html">Tools needed</a>
                <a class="dropdown_link" href="./care.php">How to care for your herbarium</a>
            </div>
        </div>
    </li>
    <li><a href="./enquiry.php">Enquiry</a></li>
    <li><a href="./identify_page.php">Identify</a></li>
    <li><a href="./contribution.php">Contribute</a></li>
</ul>
<div>
    <ul class="right-bar">
        <li><a href="./about_me_hub.php">About us</a></li>
        <li><a href="./login.php">Login/ Sign up</a></li>
    </ul>
</div>
</div>
'
?>