<!DOCTYPE html>
<html lang="en">
<x-head />

<body>
    <div id="ihsanCRMWebAi"></div>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <x-navbar />
            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">A Software Agency Of Inteligents & Creative People</h1>
                            <p class="text-white pb-3 animated slideInDown">Welcome to Medtronix! We're your one-stop-shop for App & Web Development , SEO Services , Digital Market and Graphic Design. Whatever you're looking Our team of experts is here to help you achieve your Specific Goal, and we're committed to delivering the best possible results for your business.</p>
                            <a href="/about-us" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                            <a href="/contact-us" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h5 class="mb-3">Digital Marketing</h5>
                            <p class="m-0">Social Media Marketing has proved itself to become an Effective source of comunicataion So we are offering Digital Marketting and Ads Services</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fab fa-3x fa-android text-primary mb-4"></i>
                            <h5 class="mb-3">App Development</h5>
                            <p class="m-0">We Design Professional looking Android and IOS Mobile
                                Applications.Our Design are Search Engine and User Friendly </p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                            <h5 class="mb-3">Web Development</h5>
                            <p class="m-0">Our Flawless Skills in Front-End & Back-End Development , Admin Panel , Databases ,Server APIs can give your Company Website a real BOOST in Gernating High Revenues. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">About Us<span></span></p>
                        <h1 class="mb-5">#1 Digital solution with 10 years of experience</h1>
                        <p class="mb-4">We offer various kinds of services like Web Development, App Development, Desktop App Development, Graphic Designs, Seo Servieces, Embedded Systems, Digital Marketing, Ecommerce Management Services, Chrome Extension and Many More.</p>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Digital Marketing</p>
                                <p class="mb-2">85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">SEO & Backlinks</p>
                                <p class="mb-2">90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Web & App Development</p>
                                <p class="mb-2">95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Facts Start -->
        <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">10</h1>
                        <p class="text-white mb-0">Years Experience</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">12</h1>
                        <p class="text-white mb-0">Team Members</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">495</h1>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">505</h1>
                        <p class="text-white mb-0">Compleate Projects</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Services<span></span></p>
                    <h1 class="text-center mb-5">What Solutions We Provide</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-android fa-2x"></i>
                            </div>
                            <h5 class="mb-3">App Development</h5>
                            <p class="m-0">We specialize in building custom apps for iOS and Android devices that are user-friendly, scalable, and tailored to your unique requirements</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">SEO Optimization</h5>
                            <p class="m-0">If you're looking to improve your local search rankings or compete on a national or global level, we can help you achieve your SEO goals.</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Web Design & Development</h5>
                            <p class="m-0">If you need a simple brochure website or a complex e-commerce platform, Web App we can help bring your vision to life. </p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Digital Marketing</h5>
                            <p class="m-0">We offer a range of services, including social media account setup and management,social media advertising, influencer marketing, and analytics and reporting.</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-mail-bulk fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Graphic Design</h5>
                            <p class="m-0">If you're looking to establish a new brand or refresh your existing one, we can help you achieve your graphic design goals.</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-thumbs-up fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Desktop Applications</h5>
                            <p class="m-0">We specialize in developing custom desktop apps for Windows and MacOS platforms, using the latest technologies and industry</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        <x-newsletter />
        <x-portfolio />
        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                    <h1 class="text-center mb-5">Our Team Members</h1>
                </div>
                <div class="row g-4">
                    <!--      <div class="col-lg-2 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                     </div> -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-primary rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team/arslan_1.jpg" alt="">
                                <h5 class="text-white">Arslan Ahmad</h5>
                                <span>Founder & CTO</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-primary rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team/image4.jpg" alt="">
                                <h5 class="text-white">Usama Ahmad</h5>
                                <span>Project Manager</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-primary rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team/img_4.jpg" alt="">
                                <h5 class="text-white">Shehroz Shabbir</h5>
                                <span>Sr. Web Developer</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-primary rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team/mudassar.jpeg" alt="">
                                <h5 class="text-white">Muddassar Farooq</h5>
                                <span>Jr. Developer</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-3 ">
                        <a href="/team" style="float: right;" class="btn btn-secondary p-2 animated ">View All</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        <x-footer />
    </div>
    <x-foot />
</body>

</html>


</script>
