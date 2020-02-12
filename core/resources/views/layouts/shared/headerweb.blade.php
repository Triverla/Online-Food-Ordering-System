<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><a href="index.html"><img src="{{asset('images/logo.png')}}" alt="" title=""
            width="120px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
           
            <li class="nav-item active"><a href="#section-home" class="nav-link">HOME</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">ABOUT</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">GALLERY</a></li>
            <li class="nav-item"><a href="{{url('menu#menu')}}" class="nav-link">MENU</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">CONTACT</a></li>
            @guest
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">LOGIN</a></li>
            <li class="nav-item"><a href="{{route('register')}}" class="nav-link">REGISTER</a></li>
            @else
            @if(auth()->user()->is_admin == 1)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               ADMIN
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('cat.index')}}">Categories</a>
                <a class="dropdown-item" href="{{url('food')}}">Products</a>
                <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('order.index')}}">Manage Orders</a>
              </div>
            </li>
            @endif
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('account')}}">Account</a>
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
            @endguest
            <li class="nav-item"><a class="btn btn-sm btn-outline-warning" href="tel: 2348112233689" class="nav-link"><i
                  class="fa fa-phone"></i> +2348112233689</a></li>
          </ul>
        </div>
    </div>
  </nav>
  <!-- END nav -->