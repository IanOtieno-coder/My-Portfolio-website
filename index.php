<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <!-- CSS FILES -->
    <link rel="stylesheet" href="./css/style.css?v3.2">
    <link rel="stylesheet" href="./css/skins/color-1.css">
    
    <!-- Style SWitcher -->
    <link rel="stylesheet" href="./css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="./css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="./css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="./css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="./css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="./css/style-switcher.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body class="dark">
    <!-- MAIN START -->
    <main class="main-container">
        <!-- ASIDE START -->
        <aside class="aside">
            <div class="logo">
                <a href="#"><span>I</span>an</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a id="links" href="#home" class="nav-link active"><i class="fa fa-home"></i><span class="tooltiptext">Home</span></a></li>
                <li><a id="links" href="#about" class="nav-link"><i class="fa fa-user"></i><span class="tooltiptext">About</span></a></li>
                <li><a id="links" href="#skillset" class="nav-link"><i class="fa-solid fa-bars-staggered"></i><span class="tooltiptext">Skill set</span></a></li>
                <li><a id="links" href="#services" class="nav-link"><i class="fa fa-list"></i><span class="tooltiptext">Services</span></a></li>
                <li><a id="links" href="#portfolio" class="nav-link"><i class="fa fa-briefcase"></i><span class="tooltiptext">Portfolio</span></a></li>
                <li><a id="links" href="#contact" class="nav-link"><i class="fa fa-comments"></i><span class="tooltiptext">Contact</span></a></li>
            </ul>
        </aside>
        <!-- ASIDE END -->

        <!-- MAIN CONTENT START -->
        <div class="main-content">
            <!-- HOME SECTION START --> 
            <section id="home" class="home section">
                <div class="container">
                    <div class="row">

                        <div class="home-info padd-15">
                            <h3 class="hello">Hello, my name is <span class="name">Ian Ochieng</span></h3>
                            <h3 class="my-profession">I'm a <span class="typing" id="typing">Web Developer</span></h3>
                            <p>
                                As a skilled web developer, I possess a comprehensive understanding of front-end and back-end technologies, allowing me to create dynamic and visually appealing websites. My expertise in HTML, CSS, and JavaScript enables me to craft seamless user interfaces and ensure a delightful user experience. Proficient in various frameworks and libraries, I adeptly navigate the complexities of web development, utilizing tools such as React, Angular, or Vue.js to build interactive and responsive applications. 
                            </p>
                            <a href="#contact" class="btn hire-me">Hire Me</a>
                        </div>

                        <div class="home-img padd-15">
                            <img src="./images/ian.jpg" alt="profile-picture">
                        </div>
                    </div>
                </div>
            </section>
            <!-- HOME SECTION END -->

            <!-- ABOUT SECTION START -->
            <section id="about" class="about section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>Brief description of <span id="typing2">myself</span></h3>
                                    <p class="js-read-more">
                                        <span class="read-less-text">
                                            As a skilled web developer, I possess a comprehensive understanding of front-end and back-end technologies, allowing me to create dynamic and visually appealing websites. My expertise in HTML, CSS, and JavaScript enables me to craft seamless user interfaces and ensure a delightful user experience. Proficient in various frameworks and libraries, I adeptly navigate the complexities of web development, utilizing tools such as React, Angular, or Vue.js to build interactive and responsive applications. <br>
                                        </span>
                                        
                                        <span class="read-more-text">
                                            <br>My back-end prowess involves languages like Python, PHP, or Node.js, allowing me to architect robust server-side solutions. Database management is second nature to me, as I efficiently design and implement databases using technologies like MySQL, MongoDB, or PostgreSQL. my commitment to clean and maintainable code is evident in my adherence to best practices and coding standards. <br> <br>

                                            Beyond technical skills, my ability to collaborate within cross-functional teams and communicate effectively sets me apart. My problem-solving mindset and continuous learning attitude keep I at the forefront of industry trends, ensuring that my projects are not only functional but also incorporate the latest advancements in web development. <br> <br>

                                            Overall, I are a versatile and dedicated web developer who combines technical expertise with creativity to bring digital visions to life.
                                        </span>
                                
                                
                                    </p>
                                    <button class="btn read-more-button">Read more</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday: <span>10 oct 2002</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age: <span id="age"></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Website: <span>lipexdevelopers.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p onclick="sendEmail()" class="emailto">Email: <span >otienoian38@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Degree: <span>Electrical and Electronics Engineering</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Phone: <span>+254 705 425 163</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City: <span>Nairobi, Kenya</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Freelance: <span id="typing3" style="color:white; width:100px; font-weight:bold; letter-spacing:.05rem; background-color:green; text-align:center; border-radius:10px;">Available</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="#" class="btn">Download CV</a>
                                            <a href="#contact" class="btn hire-me">Hire Me</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ABOUT SECTION END -->
            <!-- SKILLSET SECTION START -->
            <section class="section skillset" id="skillset">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Skills Set</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="skills padd-15">
                            <div class="row">
                                <h2>Skills</h2>
                                <div class="skill-item padd-15">
                                    <h5>HTML</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 75%;"></div>
                                        <div class="skill-percent">75%</div>
                                    </div>
                                </div>
                                <div class="skill-item padd-15">
                                    <h5>CSS</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 65%;"></div>
                                        <div class="skill-percent">65%</div>
                                    </div>
                                </div>
                                <div class="skill-item padd-15">
                                    <h5>JS</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div>
                                        <div class="skill-percent">50%</div>
                                    </div>
                                </div>
                                <div class="skill-item padd-15">
                                    <h5>React</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 40%;"></div>
                                        <div class="skill-percent">40%</div>
                                    </div>
                                </div>
                                <div class="skill-item padd-15">
                                    <h5>PHP</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 60%;"></div>
                                        <div class="skill-percent">60%</div>
                                    </div>
                                </div>
                                <div class="skill-item padd-15">
                                    <h5>SQL</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 50%;"></div>
                                        <div class="skill-percent">50%</div>
                                    </div>
                                </div>
                                <div>
                                    ohpwiwuoiruhiureoihuo
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SKILLSET SECTION END -->

            <!-- SERVICE SECTION START -->
            <section id="services" class="service section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>

                    <div class="services-row">
                        <!-- Service item start -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <h4>Frontend Development</h4>
                                <p>
                                    The websites I build have a resposive frontend that is adaptable to all screen sizes.
                                </p>
                            </div>
                        </div>
                        <!-- Service item end -->
                        <!-- Service item start -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-mobile-alt"></i>
                                </div>
                                <h4>Backend Development</h4>
                                <p>
                                    My back-end development skills are top-notch with ability to use different languages such as php,Python and node.js depending on the customer requirements.
                                </p>
                            </div>
                        </div>
                        <!-- Service item end -->
                        <!-- Service item start -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-palette"></i>
                                </div>
                                <h4>Full Stack Development</h4>
                                <p>
                                    I offer website development from start to finish catering for both frontend and backend development upto deployment on a live server.
                                </p>
                            </div>
                        </div>
                        <!-- Service item end -->
                        
                    </div>
                </div>
            </section>
            <!-- SERVICE SECTION END -->

            <!-- PORTFOLIO SECTION START -->
            <section id="portfolio" class="portfolio section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portfolio</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="portfolio-heading">
                            <h2>My latest projects: </h2>
                        </div>
                    </div>

                    <div class="row">
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./images/portfolio/portfolio-1.jpg" alt="portfolio-1">
                                </div>
                                <div class="portfolio-overlay">
                                    <h2>My Project</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./images/portfolio/portfolio-2.jpg" alt="portfolio-2">
                                </div>
                                <div class="portfolio-overlay">
                                    <h2>My Project</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./images/portfolio/portfolio-3.jpg" alt="portfolio-3">
                                </div>
                                <div class="portfolio-overlay">
                                    <h2>My Project</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./images/portfolio/portfolio-4.jpg" alt="portfolio-4">
                                </div>
                                <div class="portfolio-overlay">
                                    <h2>My Project</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./images/portfolio/portfolio-5.jpg" alt="portfolio-5">
                                </div>
                                <div class="portfolio-overlay">
                                    <h2>My Project</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="./images/portfolio/portfolio-6.jpg" alt="portfolio-6">
                                </div>
                                <div class="portfolio-overlay">
                                    <h2>My Project</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                    </div>
                </div>
            </section>
            <!-- PORTFOLIO SECTION END -->

            <!-- CONTACT SECTION START -->
            <section id="contact" class="contact section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>

                    <h3 class="contact-title padd-15">Do you have any questions ?</h3>
                    <h4 class="contact-sub-title padd-15">Here where you can contact me:</h4>

                    <div class="row">
                        <!-- Contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call me on</h4>
                            <p>+254 705 425 163</p>
                        </div>
                        <!-- Contact info item end -->
                        <!-- Contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p> otienoian38@gmail.com</p>
                        </div>
                        <!-- Contact info item end -->
                        <!-- Contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa-brands fa-github"></i></div>
                            <h4>Website</h4>
                            <p>lipexdevelopers.com</p>
                        </div>
                        <!-- Contact info item end -->
                    </div>

                    <h3 class="contact-title padd-15">Send Me An Email</h3>
                    <h4 class="contact-sub-title padd-15">Fill in the form below</h4>

                    <!-- Contact form start -->
                    <div class="row">
                        <form action="sendEmail.php" method="post" class="contact-form padd-15">
                            <div class="row">
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <button type="submit" class="btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact form end -->
                </div>
            </section>
            <!-- CONTACT SECTION END -->
        </div>
        <!-- MAIN CONTENT END -->
    </main>
    <!-- MAIN END -->
    <!-- STYLE SWITCHER START -->
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas "></i>
        </div>
        <h4>Theme Color</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')" ></span>
            <span class="color-2" onclick="setActiveStyle('color-2')" ></span>
            <span class="color-3" onclick="setActiveStyle('color-3')" ></span>
            <span class="color-4" onclick="setActiveStyle('color-4')" ></span>
            <span class="color-5" onclick="setActiveStyle('color-5')" ></span>
        </div>
    </div>
    <!-- STYLE SWITCHER END -->




    <script src="./js/script.js?v=3.9"></script>
    <script src="./js/style-switcher.js?v=2.0"></script>
</body>
</html>