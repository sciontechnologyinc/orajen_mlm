<nav class="navbar navbar-expand-lg navbar-dark navbar-default fixed-top">
      <div class="container">
        <a class="navbar-brand" id="navbar-header"><img src="{{ url('/img/logo.png') }}" alt="logo" /> <span class="company-name">ORAJEN Marketing</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('ecommercehome')}}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('ecommerceproducts')}}">PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('ecommerceaboutus')}}">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('ecommercecontact')}}">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">LOG-IN</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

     <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>

    <script>
      $(window).scroll(function(){
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
      $('.nav-link').toggleClass('scrolled', $(this).scrollTop() > 50);
      $('.company-name').toggleClass('scrolled', $(this).scrollTop() > 50);
    });
    </script>