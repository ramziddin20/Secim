<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Finanza - Financial Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="{{asset('img/transperentoq.png')}}" type="image/png">
    <meta property="og:image" content="img/transperentoq.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-danger" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt text-danger me-2"></i>123 Street, New York, USA</small>
            <small class="ms-4"><i class="fa fa-clock text-danger me-2"></i>9.00 am - 9.00 pm</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small><i class="fa fa-envelope text-danger me-2"></i>info@example.com</small>
            <small class="ms-4"><i class="fa fa-phone-alt text-danger me-2"></i>+012 345 6789</small>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="display-5 text-danger m-0">Seçim</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" class="nav-item nav-link active">Главный</a>
                <a href="#about" class="nav-item nav-link">О нас</a>
                <a href="#whyChoosingUs" class="nav-item nav-link">Почему выбирают нас</a>
                <a href="#service" class="nav-item nav-link">Услуги</a>
                <a href="#university" class="nav-item nav-link">Университет</a>
                <a href="#support" class="nav-item nav-link">Контакт</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                    <small class="fab fa-instagram text-danger"></small>
                </a>
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                    <small class="fab fa-facebook text-danger"></small>
                </a>
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                    <small class="fab fa-youtube text-danger"></small>
                </a>
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                    <small class="fab fa-telegram text-danger"></small>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s" id="home">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $key => $slider)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <img class="w-100 align-items-center" src="/images/{{$slider->image}}" alt="Image"
                         style="height: 1200px; display: block; margin-left: auto; margin-right: auto; width: 20%;">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p class="d-inline-block border border-white rounded text-danger fw-semi-bold py-1 px-3 animated slideInDown">
                                        Добро пожаловать в Seçim</p>
                                    <h1 class="display-1 mb-4 animated slideInDown">Your Financial Status Is Our
                                        Goal</h1>
                                    <a href="" class="btn btn-danger py-3 px-5 animated slideInDown">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <p class="d-inline-block border border-white rounded text-danger fw-semi-bold py-1 px-3 animated slideInDown">
                                    Welcome to Finanza</p>
                                <h1 class="display-1 mb-4 animated slideInDown">True Financial Support For You</h1>
                                <a href="" class="btn btn-danger py-3 px-5 animated slideInDown">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="img/about.jpg">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-danger fw-semi-bold py-1 px-3">О нас</p>
                <h1 class="display-5 mb-4">Мы помогаем нашим клиентам</h1>
                <div class="border rounded p-4">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Story
                            </button>
                            <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Mission
                            </button>
                            <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Vision
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                             aria-labelledby="nav-story-tab">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
                                diam et eos labore.</p>
                            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                Clita erat ipsum et lorem et sit</p>
                        </div>
                        <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
                                diam et eos labore.</p>
                            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                Clita erat ipsum et lorem et sit</p>
                        </div>
                        <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
                                diam et eos labore.</p>
                            <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                Clita erat ipsum et lorem et sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-xxl feature py-5" id="whyChoosingUs">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded text-danger fw-semi-bold py-1 px-3">Почему выбирают нас!</p>
                <h1 class="display-5 mb-4">Несколько причин, почему люди выбирают нас!!</h1>
                <a class="btn btn-danger py-3 px-5" href="">Explore More</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="feature-box border rounded p-4">
                                    <i class="fa fa-check fa-3x text-danger mb-3"></i>
                                    <h4 class="mb-3">Fast Executions</h4>
                                    <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                        erat amet</p>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="feature-box border rounded p-4">
                                    <i class="fa fa-check fa-3x text-danger mb-3"></i>
                                    <h4 class="mb-3">Guide & Support</h4>
                                    <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                        erat amet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="feature-box border rounded p-4">
                            <i class="fa fa-check fa-3x text-danger mb-3"></i>
                            <h4 class="mb-3">Financial Secure</h4>
                            <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat
                                amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Service Start -->
<div class="container-xxl service py-5" id="service">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-danger fw-semi-bold py-1 px-3">Наш сервис</p>
            <h1 class="display-5 mb-5">Услуги</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                         style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                    justo erat amet.</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Secured Loans</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Credit Facilities</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Cash Advanced</p>
                                <a href="" class="btn btn-danger py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="img/service-2.jpg"
                                         style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                    justo erat amet.</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Secured Loans</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Credit Facilities</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Cash Advanced</p>
                                <a href="" class="btn btn-danger py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="img/service-3.jpg"
                                         style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                    justo erat amet.</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Secured Loans</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Credit Facilities</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Cash Advanced</p>
                                <a href="" class="btn btn-danger py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="img/service-4.jpg"
                                         style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                    justo erat amet.</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Secured Loans</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Credit Facilities</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Cash Advanced</p>
                                <a href="" class="btn btn-danger py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Callback Start -->
<div class="container-fluid callback my-5 pt-5" id="support">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form class="form-control" action="{{ route('callback.store') }}" method="POST">
                    @csrf
                <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <p class="d-inline-block border rounded text-danger fw-semi-bold py-1 px-3">Связаться</p>
                        <h1 class="display-5 mb-5">Запросить обратный звонок</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя">
                                <label for="name">Ваше имя</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Ваш электронной почты">
                                <label for="email">Ваш электронной почты</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input name="phone" type="text" class="form-control" id="phone_number" placeholder="Твой мобильный">
                                <label for="phone_number">Твой мобильный</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input name="country" type="text" class="form-control" id="country" placeholder="Твоя страна">
                                <label for="country">Твоя страна</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control" placeholder="Оставьте сообщение здесь" id="message"
                                          style="height: 100px"></textarea>
                                <label for="message">Сообщение</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-danger w-100 py-3" type="submit">Отправить сейчас</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Callback End -->


<!-- Projects Start -->
<div class="container-xxl py-5" id="university">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-danger fw-semi-bold py-1 px-3">Наши университеты</p>
            <h1 class="display-5 mb-5">Университеты</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/service-1.jpg" alt="">
                    <a href=""><i class="fa fa-link fa-3x text-danger"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Financial Planning</h4>
                </div>
            </div>
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/service-2.jpg" alt="">
                    <a href=""><i class="fa fa-link fa-3x text-danger"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Cash Investment</h4>
                </div>
            </div>
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/service-3.jpg" alt="">
                    <a href=""><i class="fa fa-link fa-3x text-danger"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Financial Consultancy</h4>
                </div>
            </div>
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/service-4.jpg" alt="">
                    <a href=""><i class="fa fa-link fa-3x text-danger"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Business Loans</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->

<!-- Footer Start -->
<div class="container-fluid bg-danger text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Контакты</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                            class="fab fa-telegram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">

            </div>
            <div class="col-lg-3 col-md-6">

            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Быстрые ссылки</h4>
                <a class="btn btn-link" href="#home">Главный</a>
                <a class="btn btn-link" href="#about">О нас</a>
                <a class="btn btn-link" href="#whyChoosingUs">Почему выбирают нас</a>
                <a class="btn btn-link" href="#service">Услуги</a>
                <a class="btn btn-link" href="#university">Университет</a>
                <a class="btn btn-link" href="#support">Контакт</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-danger btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
