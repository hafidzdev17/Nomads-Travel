 <!-- Navigation Start -->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand">
        <i class="fas fa-running fa-2x "></i> Mlaku Travel
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navb">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
              <li class="nav-item mx-md-2"><a href="index.html" class="nav-link active">Home</a></li>
              <li class="nav-item mx-md-2"><a href="#" class="nav-link">Paket Travel</a></li>
              <li class="dropdown my-2 my-lg-0 d-none d-md-block">
                  <a class="nav-link nav-user" data-toggle="dropdown" href="javascript: void(0);" role="button"
                      aria-haspopup="false" aria-expanded="false">
                      <span class="ml-1 nav-user-name hidden-sm">Service<i class="mdi mdi-chevron-down"></i> </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-left">
                      <a class="dropdown-item" href="#"><i class="fab fa-cc-visa text-muted mr-2"></i> Visa</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-passport text-muted mr-2"></i> Passport</a>
              </li>
              <li class="nav-item mx-md-2"><a href="#" class="nav-link">Testimonial</a></li>
          </ul>

          @guest
          <!-- Mobile Button -->
          <form class="form-inline d-sm-block d-md-none">
           @csrf
           <button class="btn btn-signin my-2 my-sm-0" type="button" onclick="event.preventDefault(); 
              location.href='{{ url('login') }}';">
                  <i class="fas fa-user-lock mr-2"></i>
                  Masuk
                </button>
              </form>
              
              <!-- Desktop Button -->
              <form class="form-inline my-2 my-lg-0 d-none d-md-block">
             @csrf               
              <button class="btn btn-signin btn-navbar-right my-2 my-sm-0 px-4" type="button"
              onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                  <i class="fas fa-user-lock mr-2"></i>
                  Masuk
                </button>
              </form>
              @endguest


          @auth
          <!-- Mobile Button -->
          <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
           @csrf
           <button class="btn btn-signin my-2 my-sm-0" type="submit">
                  <i class="fas fa-user-lock mr-2"></i>
                  Keluar
                </button>
              </form>
              
              <!-- Desktop Button -->
              <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
             @csrf               
              <button class="btn btn-signin btn-navbar-right my-2 my-sm-0 px-4" type="submit"
              >
                  <i class="fas fa-user-lock mr-2"></i>
                 Keluar
                </button>
              </form>
              @endauth
          
                  </div>
  </div>
</nav>
<!-- Navigation End -->
             