<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Stanley</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Stanley</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            @include('layouts.about')
            <hr class="m-0" />
            <!-- Blog-->
            <section class="resume-section" id="blog">
                <div class="resume-section-content">
                    <h2 class="mb-5">Blog</h2>
                    @include('layouts.blog')
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    @include('layouts.experience')
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    @include('layouts.education')
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <!-- <ul class="list-inline dev-icons"> -->
                    <ul>
                    LAMP、HTML、CSS、JavaScript、jQuery、AJAX、Laravel、XML、Web Service、MySQL、MSSQL、PHP、ASP、ASP.Net(C#)
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile, Web, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a web developer, I spend most of my time outdoors. In the summer, I am an avid fisherman. In the summer of Tasmania, I like sailing, fishing, camping, and road trips.</p>
                    <p class="mb-0">When forced to enter the room, I will watch some survival and war-type movies and TV shows. At the same time, I spend a lot of spare time exploring the latest technological advances in the front-end, back-end, mobile, and web development fields.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Portfolio-->
            <section class="resume-section" id="portfolio">
                <div class="resume-section-content">
                    <h2 class="mb-5">Portfolio</h2>
                    <!-- <p>Apart from being a web developer, I spend most of my time outdoors. In the summer, I am an avid fisherman. In the summer of Tasmania, I like sailing, fishing, camping, and road trips.</p>
                    <p class="mb-0">When forced to enter the room, I will watch some survival and war-type movies and TV shows. At the same time, I spend a lot of spare time exploring the latest technological advances in the front-end, back-end, mobile, and web development fields.</p> -->
                    <div width="100%">
                    <div>ifunpot App (social app) - Independent development</div><br/>
                    <div><img src="/public/upload/images/app1.jpg" width="80%" height="40%"><img src="/public/upload/images/app2.jpg" width="80%" height="40%"></div><br/>
                    <div><a href="https://funday.asia/" target="_blank">FunDay - 線上數位教學</a></div><br/>
                    <div><a href="https://funday.asia/" target="_blank"><img src="/public/upload/images/funday.png" width="80%" height="40%"></a></div><br/>
                    <div><a href="https://university.1111.com.tw/" target="_blank">University Departmant for 1111 Job Bank - 1111 人力銀行大學網</a></div><br/>
                    <div><a href="https://university.1111.com.tw/" target="_blank"><img src="/public/upload/images/uni.png" width="80%" height="40%"></a></div><br/>
                    <div><a href="https://www.wed168.com.tw/" target="_blank">Wed168 website - 婚禮情報</a></div><br/>
                    <div><a href="https://www.wed168.com.tw/" target="_blank"><img src="/public/upload/images/wed168.png" width="80%" height="40%"></a></div><br/>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Information Technology Expert Certifications</br>
                                |- Network Communication Technology</br>
                                |- Computer System</br>
                                |- System Development and Operation</br>
                                |- Network Security and general security management concepts</br>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            MySQL training
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Microsoft MSSQL training
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Oracle Certified Professional, Java SE 6 Programmer training-2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Cisco CCNA Certifications– 2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Cisco CCNP Training-2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Level B technician for computer hardware fabrication-2004
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Teacher Assistant of Cisco Certified Network Association, 2005 – 2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Assistant Teacher of Database Management, 2005-2006
                        </li>
                        <!-- <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            2
                            <sup>nd</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2008
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - James Buchanan High School - Hackathon 2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3
                            <sup>rd</sup>
                            Place - James Buchanan High School - Hackathon 2005
                        </li> -->
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
