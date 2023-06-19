<!-- 

Footer to include: 
•	copyright notice 
•	privacy policy 
•	social media icons (Facebook, Twitter, Instagram). 


 -->


<footer class="container-sm d-flex flex-column justify-content-center" style="margin-top: 50px;">

    <div class="container-sm d-flex justify-content-center" id="section4">
        <div class="container-sm ">
            <div class="row d-flex justify-content-center">
                <div id="back-to-top" class="back-to-top d-flex justify-content-end">
                    <span>Back to Top</span>
                </div>
                <hr>
                <div class="d-flex justify-content-center" style="margin-bottom: 25px;">
                    <a href="index.php">
                        <img src="img/A2Z_recyclers_black_logo.png" width="200" class="img-fluid p-2" alt="brand">
                    </a>
                </div>
                <ul class="col d-flex justify-content-center" id="footer-nav" style="font-size: clamp(10px, 2vw, 15px);margin-bottom: 25px;">
                    <!-- added a bit of margin to center navbar items better since the search box is "camuflated" -->

                    <li class="nav-item d-flex">
                        <a class="nav-link zone" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link zone" href="purpose.php">Purpose</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link zone" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link zone" href="contact.php">Contact</a>
                    </li>

                </ul>

                <ul class=" d-flex justify-content-center" id="footer-nav" style="font-size: clamp(10px, 2vw, 15px);margin-bottom: 25px;">
                    <!-- added a bit of margin to center navbar items better since the search box is "camuflated" -->
                    <li class="nav-item">
                        <a class="nav-link zone" href="#">Privacy Policy</a>
                    </li>
                </ul>



                <hr>
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 15px;">
                    <p style="font-size: clamp(10px, 2vw, 15px); margin:0px">
                        <small>&copy;<?php echo date('Y'); ?> Copyright AUni LMS. All rights reserved.</small>
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="#facebook">
                            <img src="img/social media/facebook.png" width="20" class="img-fluid " alt="facebook">
                        </a>
                        <a href="#twitter">
                            <img src="img/social media/twitter.png" width="20" class="img-fluid " alt="twitter">
                        </a>
                        <a href="#instagram">
                            <img src="img/social media/instagram.png" width="20" class="img-fluid " alt="instagram">
                        </a>
                    </div>
                </div>

</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

<script>
    // js for back to top button
    var backToTop = document.getElementById('back-to-top');
    var scrollPosition = 0;
    var scrolling = false;

    function scrollListener() {
        if (!scrolling) {
            scrolling = true;
            requestAnimationFrame(function() {
                toggleBackToTop();
                scrolling = false;
            });
        }
    }

    function toggleBackToTop() {
        if (window.scrollY > scrollPosition) {
            backToTop.classList.remove('visible');
        } else {
            backToTop.classList.add('visible');
        }

        scrollPosition = window.scrollY;
    }

    function scrollToTop() {
        if (window.scrollY > 0) {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        backToTop.classList.remove('hidden'); // Hide the button after clicking it
    }

    window.addEventListener('scroll', scrollListener);
    backToTop.addEventListener('click', scrollToTop);
</script>
</body>

</html>