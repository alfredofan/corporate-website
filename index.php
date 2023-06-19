<!-- 

Homepage to show the following: 
•	Logo of the start-up 
•	Environmentally conscious image 
•	Images of some items that can be recycled  

            
•	Rust: #7b2e0f 
•	Golden yellow: #ffa200 
•	Retro blue: #0156a3 
 
 -->

<?php

include_once("src/inc/header.inc.php");


?>

<!-- Banner -->

<!-- To fix the issue with the autoplay not working I had to add the muted attribute, this will disable the audio, making the video less intrusive.
However the video above still won’t autoplay on iOS Safari, Safari requires us to add the playsinline attribute. -->
<video id="myBanner" style="width:100%; margin-top:50px; " controls autoplay loop muted playsinline>
    <source src="https://i.imgur.com/X8lyenT.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>


<!-- Welcome to A2Z - Log in and sign in options -->
<div class="container-lg d-flex justify-content-center align-items-center" style="margin-top: 100px;margin-bottom: 100px;" id="section1">
    <!--     Create Login form here and on success redirect user to the dashboard    -->
    <section class="container-form col justify-content-center bd-content ps-lg-2" style="max-width:fit-content">

        <h1>
            <span class="text-left" style="font-size: clamp(33px, 4vw, 75px); font-weight: bold;"> Welcome to
            </span>

            <!-- try to reproduce the company logo with css and html -->
        </h1>
        <h1 style="white-space: nowrap; letter-spacing: -4px;">
            <span class="text-left" style="font-size: clamp(44px, 7vw, 85px); font-weight: bold; font-style:italic; font-family:Arial, Helvetica, sans-serif; color:#7b2e0f">A</span>
            <span class="text-left" style="font-size: clamp(44px, 7vw, 85px); font-weight: bold; font-style:italic; font-family:Arial, Helvetica, sans-serif; color:#ffa200">2</span>
            <span class="text-left" style="font-size: clamp(44px, 7vw, 85px); font-weight: bold; font-style:italic; font-family:Arial, Helvetica, sans-serif; color:#7b2e0f">Z</span>
            <span class="text-left align-middle" style="margin-left: 5px; margin-bottom: 20px; letter-spacing: 0px;font-size: clamp(14px, 2vw, 42px); font-weight: ; font-style:; font-family:Arial, Helvetica, sans-serif;">recyclers
            </span>

        </h1>


        <h2 style="font-size: clamp(22px, 2.5vw, 33px);"><br>There's a better way to recycle.</h2>





        <p class="text-left" style="font-size: clamp(12px, 1.25vw, 15px);">

            Select an option to get started with your recycling.
        </p>
        <div class="d-flex gap-2 ">
            <a href="login.php" id="black-button" class="btn btn-outline-secondary btn-sm" type="button" style="margin-left: 0px;">Log in</a>
            <a href="signup.php" id="black-button" class="btn btn-primary btn-sm" type="button">Sign up</a>

        </div>
    </section>
</div>










<!--	Images of some items that can be recycled  -->

<div style="width:100%; background-color: #f1f1f1; padding-bottom: 100px;">
    <div class="container-sm d-flex justify-content-center" id="section2">

        <div class="container-text" role="grid" aria-label="Text Grid">
            <div class="row" role="grid" aria-label="Text Grid">


                <h1 class="container-sm d-flex justify-content-center" style="font-size: clamp(33px, 4vw, 75px); font-weight: bold;"><br>Recyclable Household Items</h1>
                <br><br>


                <div class="row d-flex flex-row container-text justify-content-center " role="row">

                    <div class="col-12 col-md-6" role="gridcell"> <!--alternative for "flex row reverse" in this case would be "order-md-last" -->
                        <h2 class="d-flex flex-row-reverse justify-content-center" style="font-size: clamp(22px, 3vw, 45px);">
                            Plastic Water Bottles
                        </h2>
                        <p style="padding:20px ;font-size: clamp(15px, 2vw, 22px); text-align:justify">
                            Plastic water bottles are the worst enemy one can have indoors. People often dispose
                            of plastic bottles irresponsibly after use and thus harm the environment. With a little
                            use of creativity, plastic bottles can come to good use. For instance, you can cut off the
                            bottom halves of the plastic bottles and plant seedlings in them. These nifty plant-holders
                            are easy to craft and will be a great addition to your garden space.
                        </p>
                    </div>

                    <div class="col-12 col-md-4 d-flex justify-content-center" role="gridcell">
                        <img src="img/plastic_water_bottles.jpg" class="img-fluid p-2" alt="plastic_water_bottles" style="width:max-content;">
                    </div>
                </div>


                <div class="row d-flex flex-row-reverse container-text justify-content-center" role="row">

                    <div class="col-12 col-md-6" role="gridcell"> <!--alternative for "flex row reverse" in this case would be "order-md-last" -->
                        <h2 class="d-flex flex-row-reverse justify-content-center" style="font-size: clamp(22px, 3vw, 45px);">
                            Aluminum Foil
                        </h2>
                        <p style="padding:20px ;font-size: clamp(15px, 2vw, 22px); text-align:justify">
                            Aluminum foil has various uses in our daily lives and can be handy at times.
                            However, their disadvantage, like that of unused plastic items, is that they are
                            non-biodegradable. But fret not, there are ways to upcycle and reuse aluminum foil,
                            rather than disposing it off after one use - you can place the foil behind plants in
                            the shade and use the foil as a reflector.
                        </p>
                    </div>



                    <div class="col-12 col-md-4 d-flex justify-content-center" role="gridcell">
                        <img src="img/aluminium_foil.jpg" class="img-fluid p-2" alt="aluminium_foil" style="width:max-content;">
                    </div>
                </div>


                <div class="row d-flex flex-row container-text justify-content-center" role="row">

                    <div class="col-12 col-md-6" role="gridcell"> <!--alternative for "flex row reverse" in this case would be "order-md-last" -->
                        <h2 class="d-flex flex-row-reverse align-items-center justify-content-center" style="font-size: clamp(22px, 3vw, 45px);">
                            Build an Eco-brick
                        </h2>
                        <p style="padding-top: 30px ;font-size: clamp(15px, 2vw, 22px); text-align:justify">
                            Thousands of plastic bottles end up lying in landfills every year as they can only be
                            recycled a finite number of times. So rather than just throwing them away, you can use
                            them to make nifty eco-bricks. These bricks can be used for making modular furniture,
                            as a decorative item for your garden and a paperweight to name a few.
                        </p>
                    </div>

                    <div class="col-12 col-md-4 d-flex justify-content-center" role="gridcell">
                        <img src="img\ecobrick_2.jpg" class="img-fluid p-2" alt="ecobrick" style="width:max-content;">
                    </div>
                </div>

                <div class="row d-flex flex-row-reverse container-text justify-content-center" role="row">

                    <div class="col-12 col-md-6" role="gridcell"> <!--alternative for "flex row reverse" in this case would be "order-md-last" -->
                        <h2 class="d-flex flex-row-reverse align-items-center justify-content-center" style="font-size: clamp(22px, 3vw, 45px);">
                            Reuse Your Home Delivered Newspaper
                        </h2>
                        <p style="padding:20px ;font-size: clamp(15px, 2vw, 22px); text-align:justify">
                            If you're one of those people who gets their newspaper delivered regularly then this recycling technique
                            is the best fit for you. Instead of stocking up on your old newspapers, you can use them as packing paper
                            to wrap up your fragile items or gifts. You can also use a newspaper as a cleaning aid by mixing water and a
                            splash of white vinegar to clean your window stains, effortlessly.
                        </p>
                    </div>

                    <div class="col-12 col-md-4 d-flex justify-content-center" role="gridcell">
                        <img src="img\newspaper.jpg" class="img-fluid p-2" alt="newspaper" style="width:max-content;">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- Recyclable Organisational Items -->
<div class="container-sm d-flex justify-content-center" id="section2">

    <div class="container-text" role="grid" aria-label="Text Grid">
        <div class="row" role="grid" aria-label="Text Grid">


            <h1 class="container-sm d-flex justify-content-center" style="font-size: clamp(33px, 4vw, 75px); font-weight: bold;"><br>Recyclable Organisational Items
            </h1>
            <br><br>


            <div class="row d-flex flex-row container-text justify-content-center " role="row">

                <div class="col-12 col-md-6" role="gridcell"> <!--alternative for "flex row reverse" in this case would be "order-md-last" -->
                    <h2 class="d-flex flex-row-reverse justify-content-center" style="font-size: clamp(22px, 3vw, 45px);">
                        Reuse Old Office Supplies By Introducing An Upcycle Station </h2>
                    <p style="padding:20px ;font-size: clamp(15px, 2vw, 22px); text-align:justify">
                        Whenever employees have old office furniture, phones, computers, staplers, etc. they are organized and placed in a designated shelving
                        area known as the “Upcycle Station”. When an employee is in need of a “new” office supply, it is protocol to check the Upcycle Station
                        before re-ordering any new items.
                    </p>
                </div>

                <div class="col-12 col-md-4 d-flex justify-content-center" role="gridcell">
                    <img src="img\upcycle_station.jpg" class="img-fluid p-2" alt="plastic_water_bottles" style="width:max-content;">
                </div>
            </div>


            <div class="row d-flex flex-row-reverse container-text justify-content-center" role="row">

                <div class="col-12 col-md-6" role="gridcell"> <!--alternative for "flex row reverse" in this case would be "order-md-last" -->
                    <h2 class="d-flex flex-row-reverse justify-content-center" style="font-size: clamp(22px, 3vw, 45px);">
                        Reduce The Amount Of Waste Coming Into Your Facility </h2>
                    <p style="padding:20px ;font-size: clamp(15px, 2vw, 22px); text-align:justify">
                        When it comes to the 3Rs of recycling and actively increasing your waste diversion rate, the best thing your facility can do is REDUCE.
                        This means focusing on your supply stream and what you bring into your facility. Promote your program to your vendors and work to bring in only
                        items that are recyclable or compostable. If you can control what's coming into your facility, you have a much better chance at diverting more
                        waste from landfill because the waste your facility is producing is already recyclable, reusable or compostable.
                    </p>
                </div>



                <div class="col-12 col-md-4 d-flex justify-content-center" role="gridcell">
                    <img src="img\recycle_reuse_reduce.jpg" class="img-fluid p-2" alt="aluminium_foil" style="width:max-content;">
                </div>
            </div>


            <div class="row d-flex flex-row container-text justify-content-center" role="row">

                <div class="col-12 col-md-6" role="gridcell"> <!--alternative for "flex row reverse" in this case would be "order-md-last" -->
                    <h2 class="d-flex flex-row-reverse align-items-center justify-content-center" style="font-size: clamp(22px, 3vw, 45px);">
                        Ditch Take Out Coffee Cups </h2>
                    <p style="padding-top: 30px ;font-size: clamp(15px, 2vw, 22px); text-align:justify">
                        We can't ask employees to give up their morning coffees, but just think about how many of those cups get tossed in the office waste bins daily.
                        Instead, opt to provide them with reusable coffee mugs and water bottles. This small change can drastically reduce the amount of coffee cups and
                        plastic bottles filling up your waste and recycling streams.
                    </p>
                </div>

                <div class="col-12 col-md-4 d-flex justify-content-center" role="gridcell">
                    <img src="img\coffe_cup.jpg" class="img-fluid p-2" alt="ecobrick" style="width:max-content;">
                </div>
            </div>

            <div class="row d-flex flex-row-reverse container-text justify-content-center" role="row">

                <div class="col-12 col-md-6" role="gridcell"> <!--alternative for "flex row reverse" in this case would be "order-md-last" -->
                    <h2 class="d-flex flex-row-reverse align-items-center justify-content-center" style="font-size: clamp(22px, 3vw, 45px);">
                        Office behavioural changes
                    </h2>
                    <p style="padding:20px ;font-size: clamp(15px, 2vw, 22px); text-align:justify">
                        Changing the attitudes of office workers towards the creation of waste in the first place can have a major impact on waste production. Eliminating
                        waste by working more carefully, making fewer errors, or simply considering whether or not to print a document can cut down paper use considerably.
                        Switching off lights and equipment when leaving the office, making sure that taps are turned off and cutting down on heating and air conditioning can
                        all reduce waste of scarce and expensive resources. Introducing a positive attitude towards reuse and recycling of materials can have similar benefits.
                    </p>
                </div>

                <div class="col-12 col-md-4 d-flex justify-content-center" role="gridcell">
                    <img src="img\behaviour_changes.jpg" class="img-fluid p-2" alt="newspaper" style="width:max-content;">
                </div>
            </div>

        </div>
    </div>
</div>

</body>



<?php
include_once("src/inc/footer.inc.php");
?>