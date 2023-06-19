<<<<<<< HEAD
<!--
    
The Contact us page includes a form to capture the user’s: 
•	full name (required) 
•	email address (required) 
•	phone number (optional) 
•	item they plan on recycling (optional) 
•	enquiry/comments (required). 

 -->


<?php
include_once("src/inc/header.inc.php");

?>


<div class="container-sm d-flex justify-content-center" id="contact" style="margin-top: 100px;">
    <div class="container-sm ">
        <div class="row d-flex justify-content-center">

            <!-- try to reproduce the company logo with css and html -->
            </h1>
            <div class="col-12 col-md-4 d-flex flex-column">
                <br><br>
                <a href="index.html">
                    <img src="img/A2Z_recyclers_black_logo.png" width="200" class="img-fluid p-2" alt="gelos logo">
                </a>
                <br><br>
                <div style="margin-left: 15px;margin-top: 12px;">
                    <h1 class="text-left" style="font-size: clamp(22px, 3vw, 45px); font-weight: bold;"> Contact Us </h1>
                    <br>
                    <p>
                        Please go to our <a href="#" id="link-text" style="text-decoration: none; font-weight:bold; color:black; margin:0px">Locations</a> page
                        to find contact details for each of our in-person volunteer desks.

                    </p>

                    <br>
                    <p>
                        If you wish to make a general enquiry, please complete this quick form and someone will get back to you within 24 hours.
                    </p>


                </div>
            </div>

            <div class="col-12 col-md-4 d-flex align-items-center container-text">
                <form action="action_page.php" target="_self" method="get">

                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your name..." maxlength="100" pattern="[a-zA-Z .]+" required="" title="This field allows only letters, space, and dots for upper and lower case letters." oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')">

                    <!-- onivalid and oniput were used to change the default message for empty field submission atempt -->

                    <div class="row mb-1">
                        <label for="username" class="form-label">Email Address </label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" placeholder="Your email..." id="username" name="username" required="" oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')">
                        </div>
                    </div>

                    <label for="phone">Phone Number</label><br>
                    <input type="tel" id="phone" class="form-control" name="phone" placeholder="0xxxxxxxxx" maxlength="10" pattern="[0]{1}[0-9]{9}" title="This field allows only numbers " oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')">
                    <!--pattern for australian phone numbers -->

                    <label for="name">Item</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your name..." maxlength="100" pattern="[a-zA-Z .]+" title="This field allows only letters, space, and dots for upper and lower case letters." oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')">
                    <!-- onivalid and oniput were used to change the default message for empty field submission atempt -->


                    <label for="message">Enquiry / Coments</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Write something..." style="max-height:100px" maxlength="300" required="" oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')"></textarea>
                    <!-- Button was customized for aesthetics  -->
                    <!-- The type was kept as submit to satisfy the css customization criteria -->
                    <input type="submit" value="Send" class="form-control" style="width: 50px;" class="d-flex justify-content-center" required="" title="Enter the complete details">

                </form>
            </div>
        </div>
    </div>
</div>





<?php
include_once("src/inc/footer.inc.php");
=======
<!--
    
The Contact us page includes a form to capture the user’s: 
•	full name (required) 
•	email address (required) 
•	phone number (optional) 
•	item they plan on recycling (optional) 
•	enquiry/comments (required). 

 -->


<?php
include_once("src/inc/header.inc.php");

?>


<div class="container-sm d-flex justify-content-center" id="contact" style="margin-top: 100px;">
    <div class="container-sm ">
        <div class="row d-flex justify-content-center">

            <!-- try to reproduce the company logo with css and html -->
            </h1>
            <div class="col-12 col-md-4 d-flex flex-column">
                <br><br>
                <a href="index.html">
                    <img src="img/A2Z_recyclers_black_logo.png" width="200" class="img-fluid p-2" alt="gelos logo">
                </a>
                <br><br>
                <div style="margin-left: 15px;margin-top: 12px;">
                    <h1 class="text-left" style="font-size: clamp(22px, 3vw, 45px); font-weight: bold;"> Contact Us </h1>
                    <br>
                    <p>
                        Please go to our <a href="#" id="link-text" style="text-decoration: none; font-weight:bold; color:black; margin:0px">Locations</a> page
                        to find contact details for each of our in-person volunteer desks.

                    </p>

                    <br>
                    <p>
                        If you wish to make a general enquiry, please complete this quick form and someone will get back to you within 24 hours.
                    </p>


                </div>
            </div>

            <div class="col-12 col-md-4 d-flex align-items-center container-text">
                <form action="action_page.php" target="_self" method="get">

                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your name..." maxlength="100" pattern="[a-zA-Z .]+" required="" title="This field allows only letters, space, and dots for upper and lower case letters." oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')">

                    <!-- onivalid and oniput were used to change the default message for empty field submission atempt -->

                    <div class="row mb-1">
                        <label for="username" class="form-label">Email Address </label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" placeholder="Your email..." id="username" name="username" required="" oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')">
                        </div>
                    </div>

                    <label for="phone">Phone Number</label><br>
                    <input type="tel" id="phone" class="form-control" name="phone" placeholder="0xxxxxxxxx" maxlength="10" pattern="[0]{1}[0-9]{9}" title="This field allows only numbers " oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')">
                    <!--pattern for australian phone numbers -->

                    <label for="name">Item</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your name..." maxlength="100" pattern="[a-zA-Z .]+" title="This field allows only letters, space, and dots for upper and lower case letters." oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')">
                    <!-- onivalid and oniput were used to change the default message for empty field submission atempt -->


                    <label for="message">Enquiry / Coments</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Write something..." style="max-height:100px" maxlength="300" required="" oninvalid="this.setCustomValidity('Enter the complete details')" oninput="setCustomValidity('')"></textarea>
                    <!-- Button was customized for aesthetics  -->
                    <!-- The type was kept as submit to satisfy the css customization criteria -->
                    <input type="submit" value="Send" class="form-control" style="width: 50px;" class="d-flex justify-content-center" required="" title="Enter the complete details">

                </form>
            </div>
        </div>
    </div>
</div>





<?php
include_once("src/inc/footer.inc.php");
>>>>>>> 486d0be1380346fcddad29b0083c76647a6d436a
?>