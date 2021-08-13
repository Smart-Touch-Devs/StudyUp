<nav class="navbar navbar-light navbar-expand-lg  d-flex bg-smt-primary py-0">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{asset('dist/img/logo.png')}}" width="50" height="50"
                class="d-inline-block align-top bg-light rounded-circle mr-2" alt="">
            <span class="h3 text-white font-weight-bold">StudyUp</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="nav justify-content-end header-nav">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold active" href="{{asset('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{asset('quest')}}">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{asset('contacts')}}">Contacter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{asset('a_propos')}}">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{asset('login')}}">Se connecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>