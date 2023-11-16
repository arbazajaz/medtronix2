<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
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
<x-navbar/>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Service</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


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
                                <i class="fas fa-robot fa2x"></i>
                            </div>
                            <h5 class="mb-3">Artiificial Intelligence</h5>
                            <p class="m-0">Elevate your AI solutions with our cutting-edge technology and expertise. Unlock the future of innovation.</p>
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
                 
                </div>
            </div>
        </div>


         <x-newsletter/>
        

     <x-footer/></div>

 <x-foot/>
</body>

</html>