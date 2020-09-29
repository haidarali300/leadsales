<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LeadSalesManager</title>
    <!-- Bootstrap CSS -->
    <link  rel="icon"   href="images/login.png" type="image/png" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css-custom.css') }}">
    @yield('link-extra')

  </head>

  <body>
    <header>
        <nav class="navbar navbar-light bg-light">
          <a @yield('ref-header') class="navbar-brand" >
            <img src="{{asset('images/lo.png')}}" alt="" loading="lazy" style="height: 50px; width: auto;">
          </a>
          <a href="{{route('login')}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <line x1="18" y1="6" x2="6" y2="18" />
              <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
          </a>
        </nav>
    </header>
    @yield('content')

    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-9">
            <h6>About</h6>
            <div class="row">
              <div class="col-1 text-left">
                <img src="{{asset('images/me.jpg')}}" style="border-radius: 100%; height: 60px; width: auto;" class="">
              </div>
              <div class="col-11 mt-2">
                <p class="text-justify">Developed by <b>Haidar Ali Alruwayjih</b>.<br> Mail: haidaraliaalruwayj@mail.adelphi.edu</p>      
              </div>
            </div> 
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="copyright-text">Copyright &copy; 2019-2020 All Rights Reserved 
            </p>
          </div>      
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    @yield('js-extra')
  </body>
</html>