@include('layouts.app')
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="index.html">MicroControllers<span>.</span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a href="{{url('charts')}}">Charts</a></li>
        <li class="dropdown"><a href="#"><span>Tables</span> <i class="bi bi-chevron-right"></i></a>
          <ul>
            <li><a href="{{url('feeding')}}">Feeding Table</a></li>
            <li><a href="{{url('water-level')}}">Water Level Table</a></li>
            <li><a href="{{url('turdibity')}}">Filter Table</a></li>
            
          </ul>
      </ul>


      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <a href="#about" class="get-started-btn scrollto">Hello</a>
  </div>
</header><!-- End Header -->