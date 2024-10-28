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
    <?php include "./include/navbar.php" ?>
        <div class="enhance">
            <div class="enhanceframe">
                <h1>Slideshow</h1>
                <div id="eslideshow">
                    <div class="eslide-wrapper">
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow1.png" alt="Slide 1"></div>
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow2.png" alt="Slide 2"></div>
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow3.png" alt="Slide 3"></div>
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow4.png" alt="Slide 4"></div>
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow5.png" alt="Slide 5"></div>
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow6.png" alt="Slide 6"></div>
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow7.png" alt="Slide 7"></div>
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow8.png" alt="Slide 8"></div>
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow9.png" alt="Slide 9"></div>
                        <div class="eslide"><img class="eslide-img" src="./images/enhancement_Slideshow10.png" alt="Slide 10"></div>
                    </div>
                </div>
                <h3>References:
                    <a class="ebutton" href="https://codepen.io/gradar/pen/BaavLLo">https://codepen.io/gradar/pen/BaavLLo</a>
                </h3>
                <h3>Used in <a class="ebutton" href="./index.html">Homepage/Index</a> and <a class="ebutton" href="./enhancements.html">Enhancement</a> </h3>
                <div class="padding20"></div>
                <h1>Flip Cards</h1> <br>
                <h3 class="font2x">This is a flip card</h3>
                <div class="centeritem">
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
                </div>
                <h3>These can be used to create an interactive element for your page <br> 
                They are also a great tool to make your page less messy as you can hide long passages behind them</h3> <br>
                <h1>For Example:</h1>
                <div class="centeritem">
                    <div class="flip_card">
                        <div class="flip_card_inner">
                        <div class="flip_card_front">
                            <h3 class="centered_text">Schrodinger's Cat</h3>
                        </div>
                        <div class="eflip_card_back">
                            <h3 class="small_text">
                                Schrödinger's cat is a thought experiment proposed by physicist Erwin Schrödinger in 1935 to illustrate the paradox of quantum superposition. In this scenario, a cat is placed inside a sealed box with a radioactive atom, a Geiger counter, a vial of poison, and a hammer. If the atom decays, the Geiger counter triggers the hammer to break the vial, releasing the poison and killing the cat. According to quantum mechanics, until the box is opened and the system is observed, the atom exists in a superposition of decayed and undecayed states. As a result, the cat is considered both alive and dead simultaneously. Schrödinger devised this paradox to highlight the strange and counterintuitive nature of quantum theory when applied to everyday objects.
                            </h3>  
                        </div>
                        </div>
                    </div>
                </div>
                <h3>References : 
                    <a class="ebutton" href="https://www.w3schools.com/howto/howto_css_flip_card.asp">https://www.w3schools.com/howto/howto_css_flip_card.asp</a>
                </h3>
                <h3>Used in: <a class="ebutton" href="./about_me_hub.html">About me page</a> and <a class="ebutton" href="./enhancements.html">Enhancement</a> </h3>
                <div class="padding20">
                <h1>Dropdown</h1>
                <h3 class="font2x">This is a dropdown</h3>
                <div class="centeritem">
                <img class="eupload_img" src="./images/Dropdown_ex.png" alt="This is the dropdown"> 
                </div>
                <p> This enhancement is used when many information or pages are under the same category. It is often used to minimize and overall make a page or navbar much neater. <br> </p>
                <h3 class="font2x">To do this you have to:</h3>
                <ol>
                    <li>Create a class for the dropdown: The dropdown should be position relatively.</li>
                    <li>Create another class for the dropdown information/content: An important aspect is to make the current location fixed and to have it hidden.</li>
                    <li>Create a condition for the dropdown to become visible: Most commonly used method is to make it visible though remember to make it hidden once the condition is no longer met. </li>
                </ol>
                </div>
                <h3>References:
                    <a class="ebutton" href="https://www.w3schools.com/howto/howto_css_dropdown.asp">W3Schools</a>
                </h3>
                <h3>This enhancement was used in the universally used Tutorial button on the navbar as such it can be found on every page.</h3>
                <h1>Responsive Pages:</h1>
                <h3>Having responsive pages is important to allow users to access your webpage properly even with a smaller screen or different aspect ratio.
                The most common way to do this is making your padding margins or sizing which commonly uses pixels as measurement to percentages. Another way in case of issues where some part of the content needs to be resized or repositioned you can use the @media argument in css</h3>
                <div class="centeritem">
                    <img class="eupload_img" src="images/Media_argument.png" alt="Media Argument Example for care page">
                </div>
                <h3>References:
                N/A </h3>
                <h3>Used in: <a class="ebutton" href="./care.html">Care</a></h3>
            </div>
        </div>
        <?php include "./include/footer.php" ?>
    </body>
</html>
