<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8" />
      <meta name="description" content="Assignment 1" />
      <meta name="keywords" content="Herbarium, Login" />
      <meta name="authors" content="Frederick Bartholomew Sii Dao Xiang" />
      <title>About us</title>
      <link rel="icon" type="image/x-icon" href="./images/favicon.png">
      <link rel="stylesheet" href="./styles/style.css" />
  </head>
  <body>
    <?php include "./include/navbar.php" ?>
    <header class="about_me_header">
      <h1>About us!</h1>
    </header>
    <div class="about_me_hub">
      <div class="flip_card_container">
          <div class="flip_card">
              <div class="flip_card_inner">
                <div class="flip_card_front">
                  <img class="flip_profile_img" src="./images/fred.jpg" alt="Fred">
                </div>
                <div class="flip_card_back">
                  <h1><a href="./fred.php">Fred</a></h1> 
                  <p>Group leader</p> 
                </div>
              </div>
          </div>
          <div class="flip_card">
              <div class="flip_card_inner">
                <div class="flip_card_front">
                  <img class="flip_profile_img" src="./images/kaiseng.jpg" alt="Kai Seng">
                </div>
                <div class="flip_card_back">
                  <h1><a href="./kaiseng.php">Kai Seng</a></h1> 
                  <p>Group member</p> 
                </div>
              </div>
          </div>
          <div class="flip_card">
              <div class="flip_card_inner">
                <div class="flip_card_front">
                  <img class="flip_profile_img" src="./images/Faridz.jpg" alt="Faridz">
                </div>
                <div class="flip_card_back">
                  <h1><a href="./faridz.html">Faridz</a></h1> 
                  <p>Group member</p>  
                </div>
              </div>
          </div>
          <div class="flip_card">
              <div class="flip_card_inner">
                <div class="flip_card_front">
                  <img class="flip_profile_img" src="./images/kelvin.jpg" alt="Kelvin">
                </div>
                <div class="flip_card_back">
                  <h1><a href="./kelvin.html">Kevin</a></h1> 
                  <p>Group member</p> 
                </div>
              </div>
          </div>
          <div class="flip_card">
              <div class="flip_card_inner">
                <div class="flip_card_front">
                  <img class="flip_profile_img" src="./images/cheng.jpg" alt="Cheng">
                </div>
                <div class="flip_card_back">
                  <h1><a href="./cheng_profile.html">Cheng</a></h1> 
                  <p>Group member</p> 
                </div>
              </div>
          </div>
      </div>
    </div>
    <?php include "./include/footer.php" ?>
  </body>
</html>