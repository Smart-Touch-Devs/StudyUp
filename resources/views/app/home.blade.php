<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>App | Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="container-fluid bg-white app-header">
        <header class="mx-auto d-flex justify-content-around align-items-center">
            <div>
                <a href="#" class="fit-content d-flex justify-content-center align-items-center text-smt-tertiary text-decoration-none">
                    <img src="{{asset('dist/img/logo.png')}}" alt="StudyUp">
                    <span class="h2 font-weight-bold">StudyUp</span>
                </a>
            </div>
            <form action="#" class="fit-content px-3 d-flex align-items-center rounded-pill">
                <i class="fal fa-search"></i>
                <input type="text" name="search" id="search" placeholder="Rechercher ..." class="border-0 ml-1">
                <input type="submit" class="d-none">
            </form>
            <div class="fit-content d-flex justify-content-center align-items-center">
                <button id="languages" class="fit-content mx-4 border-0 bg-transparent text-smt-fourth hover-text-smt-tertiary">
                    <i class="fal fa-language"></i>
                </button>
                <a href="#" id="notification" class="mx-4 text-smt-fourth text-decoration-none hover-text-smt-tertiary">
                    <i class="far fa-bell"></i>
                </a>
                <a href="#" id="user" class="mx-4 d-flex justify-content-center align-items-center text-smt-sixth text-decoration-none hover-text-smt-tertiary">
                    <img src="{{asset('dist/img/avatar.svg')}}" alt="Avatar">
                    <span class="mx-1">AbubakrSidick</span>
                    <i class="fas fa-sort-down mb-2"></i>
                </a>
            </div>
        </header>
    </div>
    <!-- <nav class=" container-fluid navbar navbar-expand-lg navbar-light bg-white d-flex justify-content-around align-items-center">
        <div class="row">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="app-nav col-lg-3">
                <a href="#" class=" navbar-brand fit-content d-flex justify-content-center align-items-center text-smt-tertiary text-decoration-none">
                    <img src="{{asset('dist/img/logo.png')}}" alt="StudyUp">
                    <span class="h2 font-weight-bold">StudyUp</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form action="#" class="fit-content px-3 d-flex align-items-center rounded-pill">
                    <i class="fal fa-search"></i>
                    <input type="text" name="search" id="search" placeholder="Rechercher ..." class="border-0 ml-1">
                    <input type="submit" class="d-none">
                </form>
                <div class="fit-content d-flex justify-content-center align-items-center">
                    <button id="languages" class="fit-content mx-4 border-0 bg-transparent text-smt-fourth hover-text-smt-tertiary">
                        <i class="fal fa-language"></i>
                    </button>
                    <a href="#" id="notification" class="mx-4 text-smt-fourth text-decoration-none hover-text-smt-tertiary">
                        <i class="far fa-bell"></i>
                    </a>
                    <a href="#" id="user" class="avatar-size mx-4 d-flex justify-content-center align-items-center text-smt-sixth text-decoration-none hover-text-smt-tertiary">
                        <img src="{{asset('dist/img/avatar.svg')}}" alt="Avatar">
                        <span class="mx-1">AbubakrSidick</span>
                        <i class="fas fa-sort-down mb-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav> -->

    <div class="container my-5">
        <div class="study-news mx-auto">
            <h1 class="fit-content mx-auto font-weight-bold text-smt-sixth mb-5">Les nouveautés de la plateforme</h1>
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('dist/img/library.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('dist/img/library.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('dist/img/library.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 for-user">
        <div class="mx-auto col-md-9">
            <div class="w-100 d-flex justify-content-between border-bottom">
                <h2 class="text-smt-sixth">Bienvenue AbubakrSidick!</h2>
                <div>
                    <button class="border-0 outline-none bg-transparent preference text-smt-sixth">
                        <i class="fal fa-sliders-h"></i>
                    </button>
                </div>
            </div>
            <h2 class="font-weight-bold my-5">Les œuvres qui pourraient vous intéresser</h2>
            <div class="row books_row">
                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                </div>

                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                </div>

                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                </div>

                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                </div>
            </div>

            <!--œuvre mieux notées-->

            <h2 class="font-weight-bold my-5">Les œuvres les mieux notées</h2>
            <div class="row books_row">
                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                </div>

                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                </div>

                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                </div>

                <div class="card p-1">
                    <div class="book_img rounded-top text-center">
                        <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fit-content rate">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star.svg')}}" alt="star">
                            <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                        </div>
                        <div class="fit-content">
                            <span class="text-smt-sixth">Gratuit</span>
                        </div>
                    </div>
                    <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="col-md-10 mx-auto">
            <h2 class="font-weight-bold my-5">Les livres sur le développement personnel</h2>

            <div class="books_carousel_container d-flex align-items-center">
                <button class="previous fit-content border-0">
                    <i class="fal fa-arrow-circle-left"></i>
                </button>

                <div class="carousel_row">
                    <div class="row books_row">
                        <div class="card p-1">
                            <div class="book_img rounded-top text-center">
                                <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div class="fit-content rate">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                                </div>
                                <div class="fit-content">
                                    <span class="text-smt-sixth">Gratuit</span>
                                </div>
                            </div>
                            <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                        </div>

                        <div class="card p-1">
                            <div class="book_img rounded-top text-center">
                                <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div class="fit-content rate">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                                </div>
                                <div class="fit-content">
                                    <span class="text-smt-sixth">Gratuit</span>
                                </div>
                            </div>
                            <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                        </div>

                        <div class="card p-1">
                            <div class="book_img rounded-top text-center">
                                <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div class="fit-content rate">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                                </div>
                                <div class="fit-content">
                                    <span class="text-smt-sixth">Gratuit</span>
                                </div>
                            </div>
                            <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                        </div>

                        <div class="card p-1">
                            <div class="book_img rounded-top text-center">
                                <img src="{{asset('image/a_c.jpg')}}" alt="Agatha_Christie">
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div class="fit-content rate">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star.svg')}}" alt="star">
                                    <img src="{{asset('dist/img/star_half.svg')}}" alt="star">
                                </div>
                                <div class="fit-content">
                                    <span class="text-smt-sixth">Gratuit</span>
                                </div>
                            </div>
                            <a href="#" class="fit-content mx-auto px-5 py-2 bg-smt-primary text-decoration-none rounded text-white font-weight-bold">Voir le livre</a>
                        </div>

                    </div>
                </div>

                <button class="next fit-content border-0">
                    <i class="fal fa-arrow-circle-right"></i>
                </button>
            </div>

        </div>
    </div>

    @include('app.layouts.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>