          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <img class="logo" src=" {{ URL::to('/img/Mask Group 3.png') }}">
              
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="list nav-item active">
                  <a style="color: white;" class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="list nav-item">
                  <a style="color: white;"class="nav-link" href="#">About Us</a>
                </li>
                <li class="list nav-item">
                  <a style="color: white;" class="nav-link disabled" href="{{route('konsul')}}">Konsultasi </a>
                </li> 
                <li class="list nav-item">
                    <a style="color: white;" class="nav-link disabled" href="#">Contact Us </a>
                  </li>
              </ul>                
              <form class="form-inline my-2 my-lg-0 ">
                <input class="form-navbar form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              </form>
              <!-- Gambar IG -->
              <a href="#"><img class="pad-img" src=" {{ URL::to('/img/instagram.png') }}"></a>
            </div>
          </nav>
      