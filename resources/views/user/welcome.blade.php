<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | HapoLearn</title>
    <link rel="icon" type="image/png" href="./images/logo_small.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- green checkbox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
</head>

<body>
    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat"></div>
    <header class="header fixed">
        <div class="container-fluid container-fixed">
            <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="#">
                    <div class="img-logo">
                        <img src="images/hapo_learn.png" alt="Hapolearn Banner">
                    </div>
                </a>
                <button class="navbarButton navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbarButton collapse navbar-collapse navbar-menu-div" id="navbarNav" class="navbar-toggler"
                    type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ALL COURSES</a>
                        </li>
                        <li class="nav-item d-xl-none ">
                            <a class="nav-link" href="#">LIST LESSON</a>
                        </li>
                        <li class="nav-item d-xl-none ">
                            <a class="nav-link" href="#">LESSON DETAILS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"
                                id="login-btn">LOGIN/REGISTER</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user" style="font-size: 20px"></i> {{Auth::user() -> name}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link danger-link" onclick="logoutform.submit()" href="#">LOGOUT</a>
                            <form action="{{route ('logout')}}" name="logoutform" class="hidden" method="post">
                                @csrf
                                <input type="submit" class="nav-link .text-danger" href="#" value='LOGOUT'>
                            </form>
                        </li>
                        @endguest
                        <li class="nav-item align d-lg-none d-md-none d-sm-none">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="align d-lg-none d-md-none d-sm-none"></div>

    <banner class="header-banner shadow-lg">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/hapo_learn_banner.png" alt="First slide">

                    <div class="header-banner-title">
                        <h1 class="display-4 learn-anytime-anywhere">Learn Anytime, Anywhere</h1>
                        <h1 class="font-weight-bold at-hapolearn">at HapoLearn <span><img src="images/logo_small.png">
                                !</span></h1>
                        <p class='description'>Interactive lessons,"on-the-go"<br>practive,peer support.</p>

                        <a class="green-btn hover-green-btn large-inset-shadow start-learning">Start
                            Learning Now!</a>

                    </div>
                </div>
            </div>
        </div>
    </banner>

    <div class="header-footer"></div>

    <div class="outstanding-session courses-session">
        <div class="container-fluid  container-fixed">
            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-light">
                            <img src="images/frontend.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">HTML/CSS/JS</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-danger">
                            <img src="images/java.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Java TUTORIAL</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center badge-success">
                            <img src="images/php.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">PHP TUTORIAL</h5>
                            <p class="card-text"> Some quick example text to build on the card title and make up the
                                card's content. build on the card tit.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="other-courses-session courses-session">
        <div class="container-fluid  container-fixed">
            <div class="title other-courses-title text-center font-weight-bold">
                Other Courses
                <hr class="text-center title-underline">
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-light">
                            <img src="images/frontend.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">HTML/CSS/JS </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-light">
                            <img src="images/frontend.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">HTML/CSS/JS</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-light">
                            <img src="images/frontend.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">HTML/CSS/JS</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-other-courses-title text-center font-weight-bold">
                <a href="#" class="view-other-courses m-3">View all our courses
                    <i class="fas fa-long-arrow-alt-right"></i>
                </a>
            </div>
            </a>
        </div>
    </div>
    <div class="why-hapolearn">
        <banner class="banner-why-hapo">
            <div id="carouseWhyHapolearnIndicators" class="carousel slide" data-ride="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselWhyHapolearnIndicators" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div>
                            <img class="d-block w-100 background" src="images/whyhapo_background.png" alt="First slide">
                            <img class="decor laptop-large" src="images/laptop_large.png" alt="laptop-large">
                            <img class="decor laptop-small" src="images/laptop_small.png" alt="laptop-small">
                            <div class="decor why-hapolearn">Why HapoLearn?</div>
                            <div class="decor reason">
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </banner>
    </div>
    <div class="feedback">
        <div class="container-fluid  container-fixed">
            <div class="title feedback-title text-center font-weight-bold">Feedback
                <hr class="text-center title-underline">
            </div>

            <p class="feedback-description mx-auto text-center"> What other students turned professionals have to say
                about
                us after
                learning with us and reaching their goals</p>
            <div class="feedback-list">
                <div class="p-sm-3 comment-div col-xl-6 col-lg-6">
                    <div class="comment">
                        <p class="comment-text">
                            “A wonderful course on how to start. Eddie beautifully conveys all
                            essentials of a becoming a good Angular developer. Very glad to have taken this
                            course.
                            Thank you Eddie Bryan.”
                        </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="mt-3 customer">
                        <div class="customer-avatar">
                            <img width="100%" class="custom-avatar-img" src="./images/avatar.png" alt="avatar">
                        </div>
                        <div class="ml-3">
                            <div class="customer-name">Nguyễn Văn An</div>
                            <div class="customer-languge">PHP</div>
                            <div class="customer-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-sm-3 comment-div col-xl-6 col-lg-6">
                    <div class="comment">
                        <p class="comment-text">
                            “A wonderful course on how to start. Eddie beautifully conveys all
                            essentials of a becoming a good Angular developer. Very glad to have taken this
                            course.
                            Thank you Eddie Bryan.”
                        </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="mt-3 customer">
                        <div class="customer-avatar">
                            <img width="100%" class="custom-avatar-img" src="./images/avatar.png" alt="avatar">
                        </div>
                        <div class="ml-3">
                            <div class="customer-name">Hoang Anh Nguyen</div>
                            <div class="customer-languge">PHP</div>
                            <div class="customer-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-sm-3 comment-div col-xl-6 col-lg-6">
                    <div class="comment">
                        <p class="comment-text">
                            “A wonderful course on how to start. Eddie beautifully conveys all
                            essentials of a becoming a good Angular developer. Very glad to have taken this
                            course.
                            Thank you Eddie Bryan.”
                        </p>
                    </div>
                    <div class="mt-3 customer">
                        <div class="customer-avatar">
                            <img width="100%" class="custom-avatar-img" src="./images/avatar.png" alt="avatar">
                        </div>
                        <div class="ml-3">
                            <div class="customer-name">Võ Minh Mạnh</div>
                            <div class="customer-languge">PHP</div>
                            <div class="customer-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-sm-3 comment-div col-xl-6 col-lg-6">
                    <div class="comment">
                        <p class="comment-text">
                            “A wonderful course on how to start. Eddie beautifully conveys all
                            essentials of a becoming a good Angular developer. Very glad to have taken this
                            course.
                            Thank you Eddie Bryan.”
                        </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="mt-3 customer">
                        <div class="customer-avatar">
                            <img width="100%" class="custom-avatar-img" src="./images/avatar.png" alt="avatar">
                        </div>
                        <div class="ml-3">
                            <div class="customer-name">Hoang Anh Nguyen</div>
                            <div class="customer-languge">PHP</div>
                            <div class="customer-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="become-a-member-banner justify-content-center text-center">
        <div class="banner-text">
            <div class="become-a-member-tilte">Become a member of our
                growing community!</div>
            <a href="#" class="become-a-member-button">Start Learning Now!</a>
        </div>
    </div>

    <div class="statistic">
        <div class="container-fluid  container-fixed">
            <div class="title statistic-title">Statistic
                <hr class="text-center title-underline">
            </div>

            <div class="statistic-detail text-center d-flex justify-content-between">
                <div class="statistic-detail-part">
                    <div class="statistic-subtitle">Courses</div>
                    <div class="statistic-number">1,586</div>
                </div>
                <div class="statistic-detail-part">
                    <div class="statistic-subtitle">Lessons</div>
                    <div class="statistic-number">2,689</div>
                </div>
                <div class="statistic-detail-part">
                    <div class="statistic-subtitle">Learners</div>
                    <div class="statistic-number">16,882</div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid  container-fixed">
            <div class="footer-main">
                <div class="row">
                    <div class="logo-col col-md-5 col-7 d-flex flex-column">
                        <span class="hapolearn-logo d-flex align-items-center">
                            <img src="./images/hapo_learn_white.png" alt="hapo_learn">
                        </span>
                        <span class="hapolearn-slogan">Interactive lessons, "on-the-go"
                            practice, peer support.</span>
                    </div>
                    <div class="col-md-2 col-6 feature-col list">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Feature</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-6 terms-col list">
                        <ul>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="contact-col col-md-3 col-5 d-flex justify-content-between">
                        <a href="https://facebook.com/tuyen.dung.haposoft" class="icon fb-icon">
                            <span><img src="./images/fb_logo.png" alt="FB"></span>
                            <span>fb.com/hapolearn</span>
                        </a>
                        <a href="tel:(+84)24.3123.3456" class="icon phone-icon">
                            <span><img src="./images/phone_logo.png" alt="C"></span>
                            <span>(+84)24.3123.3456</span>
                        </a>
                        <a href="mail:info@haposoft.com" class="icon mail-icon">
                            <span><img src="./images/mail_logo.png" alt="M"></span>
                            <span>info@hapolearn.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-copyright"> © 2020 HapoLearn, Inc. All rights reserved.</div>




    <!--Login Modal -->
    <div class="modal fade login-register-modal" id="loginModal" tabindex="-1" role="dialog"
        aria-labelledby="loginModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-modal-custom">
                <div class="modal-body p-0">
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times-circle"></i>
                    </button>

                    <ul class="nav nav-tabs p-0 login-register-bar" id="myTab" role="tablist">
                        <li class="nav-item w-50">
                            <a class="nav-link active login-nav-tab" id="login-nav-tab" data-toggle="tab"
                                href="#login-tab" role="tab" aria-controls="home" aria-selected="true">LOGIN</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link register-nav-tab" id="register-nav-tab" data-toggle="tab"
                                href="#register-tab" role="tab" aria-controls="profile"
                                aria-selected="false">REGISTER</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login-tab" role="tabpanel">
                            <form class="container-fluid container-fixed" method="POST"
                                action="{{ route ( 'login' ) }}">
                                @csrf
                                <div class="form-group mt-4">
                                    <label for="username-login" class="label-text-style">Email:</label>
                                    <input type="email" class="form-control input-custom" name="email"
                                        id="username-login">
                                </div>
                                <div class="form-group">
                                    <label for="password-login" class="label-text-style">Password:</label>
                                    <input type="password" name="password" class="form-control input-custom"
                                        id="password-login">
                                </div>
                                <div class="remember-me-and-forgot-password">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="pretty p-svg p-curve">
                                                <input type="checkbox" />
                                                <div class="state p-success">
                                                    <!-- svg path -->
                                                    <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                        <path
                                                            d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"
                                                            style="stroke: white;fill:white;"></path>
                                                    </svg>
                                                    <label class="font-weight-bold">Remember me</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="forgot-password col-6">
                                            <a href="#" class="d-block forgot-password-txt">Forgot password ?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <input type="submit" value="LOGIN"
                                        class="green-btn hover-green-btn small-inset-shadow login-btn">
                                </div>
                                <div class="mt-4 mb-sm-5 mb-4 login-with-txt">Login with</div>
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <a href="#" class="login-with-google"><i class="fab fa-google-plus-g mr-2"></i>
                                        Google</a>
                                    <a href="#" class="mb-5 login-with-facebook"><i class="fab fa-facebook-f mr-2"></i>
                                        Facebook</a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="register-tab" role="tabpanel" aria-labelledby="profile-tab">
                            <form class="container-fluid container-fixed" method="POST"
                                action="{{ route ( 'register' ) }}">
                                @csrf
                                <div class="form-group mt-4">
                                    <label for="username-register" class="label-text-style">Fullname:</label>
                                    <input type="text" class="form-control input-custom" name="name"
                                        id="username-register">
                                </div>
                                <div class="form-group">
                                    <label for="email-register" class="label-text-style">Email:</label>
                                    <input type="email" class="form-control input-custom" id="email-register"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="password-register" class="label-text-style">Password</label>
                                    <input type="password" class="form-control input-custom" id="password-register">
                                </div>
                                <div class="form-group">
                                    <label for="repeat-password-register" class="label-text-style">Repeat
                                        Password:</label>
                                    <input type="password" class="form-control input-custom"
                                        id="repeat-password-register">
                                </div>
                                <div class="d-flex mb-5 justify-content-center mt-5">
                                    <input type="submit" value="REGISTER"
                                        class="green-btn hover-green-btn small-inset-shadow login-btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
