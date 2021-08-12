<head>
<link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>
<nav>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
            <div class="container">
            
                <a class="navbar-brand js-scroll-trigger" href="{{url('/inicio')}}"><img class="img-fluid bg-amogus" src="{{asset('img/logo.png')}}" alt="" /></a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/estudiante')}}">ESTUDIANTES</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/profesor')}}">PROFESORES</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/curso')}}">CURSOS</a>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/salon')}}">SALONES</a>
                        </li>
                    </ul>
                </div>
            </div>
            
</nav>