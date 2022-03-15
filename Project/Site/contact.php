<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styleMainPage.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c623aa70b9.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="MainPage.html">
                <img src="icons\alpha.png">
            </a>
            <div class="nav-links"id = "navLinks">
                <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="MainPage.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <div class="authorization">
                <a href="http://localhost/Project/Authorization/login.php">Log In</a>
                <a href="http://localhost/Project/Authorization/register.php">Sign Up</a>
            </div>
            
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Contact Us</h1>
    </section>


    <!--Contact Us-->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1053.
        774304969044!2d71.39732764605576!3d51.084252952019526!2m3!1f0!2f0!3f0!3m
        2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424585a6cc006355%3A0x8f90912bc3efb511!
        2z0J3QsNC30LDRgNCx0LDQtdCyINCY0L3RgtC10LvQu9C10LrRgtGD0LDQu9GM0L3QsNGPIN
        GI0LrQvtC70LAg0YTQuNC30LjQutC-LdC80LDRgtC10LzQsNGC0LjRh9C10YHQutC-0LPQvi
        DQvdCw0L_RgNCw0LLQu9C10L3QuNGPINCzLiDQndGD0YAt0KHRg9C70YLQsNC9!5e0!3m2!1
        sru!2skz!4v1645963643064!5m2!1sru!2skz" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>  
                    <i class="fa-solid fa-home"></i>
                    <span>
                        <h5>Husein Ben Talal, 21</h5>
                        <p>Chiki mab boni</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>+77772344354</h5>
                        <p>Monday to Saturday, from 8 Am to 7 Pm</p>
                    </span>
                </div>

                <div>
                    <i class="fa-solid fa-at"></i>
                    <span>
                        <h5>nisSchool@ast.nis.edu.kz</h5>
                        <p>Email us if you have questions.</p>
                    </span>
                </div>
            </div>

            <div class="contact-col">
                <form action="form-handler.php" method="post">                   
                    <input type="text" name="name" placeholder="Enter Name">
                    <input type="email" name = "email" placeholder="Enter Email">
                    <input type="text" name="subject" placeholder="Enter subject">
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <input type="submit" name="submit" class="hero-btn red-btn" value="Send Message"/>
                </form>
            </div>
        </div>
    </section>
    <!--Footer-->
    <section class="footer">
        <h4>About us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, veritatis omnis unde,
             expedita eveniet sapiente fugit ipsum error repudiandae quia deserunt saepe aspernatur
              distinctio pariatur vitae cupiditate aut, id enim?</p>

        <div class="icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>

        <p>Made with <i class="fa-solid fa-heart"></i> by Alf4ch</p>
    </section>

    <!--JS for toggle menu-->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="-200px";
        }
    </script>
</body>
</html>