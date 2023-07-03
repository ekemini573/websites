<!DOCTYPE html>
<!-- This website is created by: EKEMINI GODWIN ETOKAKPAN -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forward Fitness Club</title>

<!-- font links-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&family=Roboto+Slab:wght@300&family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">

<!-- favicon links-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest"> 
    
<!-- css links-->
    <link rel="stylesheet"href="css/styles.css">
</head>
<body>
    
    <div id = "container">
        <!-- Mobile Nav -->
         <nav class="mobile-nav">
             <div id = "menu-links">
                <a href="index.html">Home</a>
                <a href="about.html">About Us</a> 
                <a href="classes.html">Classes</a> 
                <a href="nutrition.html">Nutrition</a>
                <a href="contact.html">Contact Us</a>           
             </div>

             <a class="menu-icon" onclick="hamburger()">
                 <div>&#9776;</div> 
             </a>
         </nav>


        <!-- Use the header area for the website name or logo -->
        <header id="ffc-logo" onclick="hamburger()">
            
            <a href="index.html">
                <img src="images/forward-fitness-logo1.jpg" alt="Forward Fitness Club logo" class="logo"> 
            </a>
        </header>

        <!-- Use the nav area to add hyperlinks to other pages within the website -->
        <nav class="tablet-desktop">
            <ul>
                <li><a href="index.html">Home</a></li> 
                <li><a href="about.html">About Us</a></li> 
                <li><a href="classes.html">Classes</a></li> 
                <li><a href="nutrition.html">Nutrition</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>

        <!-- Use the main area to add the main content of the webpage -->
        <main>
            
            <div id="contact">

                <h2 style="text-align: center;">Ready to get started? Contact us today.</h2>
                <h4 class="mobile tel-link" ><a href="tel: 0706-811-9972" style="color: white;">0706-811-0072</a></h4> 

                <h4 class="tablet-desktop tel-num" style="text-align: center;">(234)706-811-0072</h4>

                <h4 style="text-align: center;">Email us: <a href="mailto:forwardfitness@club.net" class="contact-email-link">forwardfitness@club.net</a></h4> 
                <h4 style="text-align: center;">Visit us at: 1275 Channel Center Street, Boston, MA 02210</h4> 

                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.5174449209794!2d7.886023014263568!3d5.
                019472740209825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105d561bd720efb9%3A0x9eb858533b06d92!2sUyo
                %20Plaza%2C%20260%20Abak%20Rd%2C%20520102%2C%20Uyo%2C%20Akwa%20Ibom!5e0!3m2!1sen!2sng!4v1680970366051!5m2!1sen!2sng" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
                class="map" ></iframe>

                </div>

            </div>

            <div id="form">
                <h2>Complete the form below to begin your free trial</h2>

                <form class="form-grid"> <!-- start form -->
                    <fieldset>
                        <legend>Customer Information</legend>
                        <label for="fName">First Name:</label>
                        <input type="text" name="fName" id="fName" required>

                        <label for="lName">Last Name:</label> 
                        <input type="text" name="lName" id="lName" required>

                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>

                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" required>

                    </fieldset>

                    <fieldset>
                        <legend>Additional Information</legend>
                        <p>I would like more information about:</p>

                        <label for="grpfit">
                        <input type="checkbox" name="interest" id="grpfit" value="Group Fitness">Group Fitness</label>

                        <label for="prtrain">
                        <input type="checkbox" name="interest" id="prtrain" value="Personal Training">Personal Training</label>

                        <label for="nutr">
                        <input type="checkbox" name="interest" id="nutr" value="Nutrition">Nutrition</label>

                    </fieldset>

                    <fieldset>
                        <legend>Referral Source</legend>
                        <label for="reference">How did you find us?</label>
                        <select name="reference" id="reference">
                            <option value="ad">Advertisement</option>
                            <option value="friend">Friend</option>
                            <option value="google">Google</option>
                            <option value="social">Social Media</option>
                            <option value="other">Other</option>
                        </select>    

                        <label for="questions"> Questions?</label>  
                        <textarea id="questions" name="questions" rows="5" cols="35"></textarea> 

                    </fieldset>
                    <input type="submit" id="submit" value ="Submit" class="btn"> 

                </form>

            </div>
        </main>

        <!-- Use the footer area to add webpage footer content -->
        <footer>

            <p>&copy; Copyright 2021. All Rights Reserved.</p>
            <p><a href="mailto:forwardfitness@club.net">forwardfitness@club.net</a></p>

        </footer>

    </div>

    <script src="scripts/script.js"></script>

</body>
</html>