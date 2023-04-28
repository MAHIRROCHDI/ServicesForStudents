<!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Acceuil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="etudiant/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="etudiant/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="etudiant/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="etudiant/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="etudiant/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="etudiant/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="etudiant/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="etudiant/assets/css/style.css" rel="stylesheet">

    
    </head>

    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

        <h2 class="logo"><a href="#">Service Scolarité</a></h2>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
            <li><a class="nav-link scrollto" href="#about">A propos </a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Contactez-nous </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2>Service scolarité en ligne</h2>
            <ul>
                <li><i class="ri-check-line"></i> L'étudiant peut demander ses documents en ligne</li>
                <li><i class="ri-check-line"></i> L'administrateur peut  traiter les demandes en ligne </li>
                <li><i class="ri"></i> Veuillez choisir votre statut</li>
            </ul>
            <div class="mt-3">
                <a href="{{ url('espace_demande')}}" class="btn-get-started scrollto">Etudiant </a>
                @if (Route::has('login'))
                @auth 
                <a href="{{ url('/redirect') }}" class="btn-get-quote">Administrateur </a>
                @else 
                <a href="{{ route('login') }}" class="btn-get-quote">Administrateur </a>
                @endauth
                @endif
            </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="etudiant/assets/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container">

            <div class="row content">
            <div class="col-lg-6">
                <h2>A propos </h2>
            </div>

            
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                Le service scolarité vous facilite la tâche de demander vos documents administratifs et les recupérer sans avoir besoin de vous déplacer à l'école.Tous ce que dont vous avez besoin est :
                </p>
                <ul>
                <li><i class="ri-check-double-line"></i> Accéder à l'espace de demande et remplir les champs demandés pour votre documents</li>
                <li><i class="ri-check-double-line"></i> Rester au courant du traitement de l'administrateur </li>
                <li><i class="ri-check-double-line"></i> Vous allez recevoir un email contenant votre documents en cas de validation,ou un motif de refus .</li>
                </ul>
                <p class="fst-italic">
                Service scolarité est là pour vous faciliter la vie.
                </p>
            </div>
            </div>

        </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
        <div class="container">

            <div class="section-title">
            <h2>Services</h2>
            </div>

            <div class="row">
            <div class="content col-xl-5 d-flex flex-column justify-content-center">
                <img src="etudiant/assets/img/service.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-xl-7">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                        </svg>
                        <i class="bi bi-trophy"></i>
                        </div>
                        <h4>Attestation de réussite</h4>
                        <p>Accéder à l'espace étudiant et remplir les champs demandés afin de récupérer votre attestation.</p>
                    </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                        </svg>
                        <i class="bx bx-file"></i>
                        </div>
                        <h4>Attestation de scolatité</h4>
                        <p>Accéder à l'espace étudiant et remplir les champs demandés afin de récupérer votre attestation.</p>
                    </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                        </svg>
                        <i class="bi bi-file-earmark-arrow-down"></i>                    </div>
                        <h4>Convention de stage</h4>
                        <p>Accéder à l'espace étudiant et remplir les champs demandés afin de récupérer votre convention de stage.</p>
                    </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                        </svg>
                        <i class="bx bx-layer"></i>
                        </div>
                        <h4>Relevé des note</h4>
                        <p>Accéder à l'espace étudiant et remplir les champs demandés afin de récupérer votre relevé des notes.</p>
                    </div>
                    </div>
                </div>
                </div><!-- End .content-->
            </div>
            </div>

        </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title">
            <h2>Contactez-nous</h2>
            <p>Pour toute question ou clarification n'hésitez pas à nous contactez</p>
            </div>

            <div class="row">

            <div class="col-lg-12">

                <div class="row">
                <div class="col-md-12">
                    <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Adresse </h3>
                    <p>27 AVENUE AZROU, TETOUAN 93030</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email </h3>
                    <p>info@scolarite.com<br>contact@scolarite.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Télephone</h3>
                    <p>+212 556 56 77 99<br>+212 525 44 45 41</p>
                    </div>
                </div>
                </div>

            </div>

            </div>

        </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
            
        <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
            &copy; Copyright <strong><span></span></strong>. All Rights Reserved
            </div>
            
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="etudiant/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="etudiant/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="etudiant/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="etudiant/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="etudiant/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="etudiant/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="etudiant/assets/js/main.js"></script>

    </body>

    </html>
