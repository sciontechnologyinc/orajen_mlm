@extends('ecommerce.master.template')

@section('content')
<div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Welcome to ORAJEN ECOMMERCE!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg joinNow">Join Now !</a>
      </header>

<div class="featured-products">
  Featured Products
  <div class="row featured-product">
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="img/4.jpg" alt="">
        <div class="fp-label">ORAJEN Whitening Soap</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="img/4.jpg" alt="">
        <div class="fp-label">ORAJEN Perfume & Cologne</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="img/4.jpg" alt="">
        <div class="fp-label">ORAJEN Supplements</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="img/4.jpg" alt="">
        <div class="fp-label">ORAJEN Whitening Soap</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="img/4.jpg" alt="">
        <div class="fp-label">ORAJEN Perfume & Cologne</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="img/4.jpg" alt="">
        <div class="fp-label">ORAJEN Supplements</div>
    </div>
  </div>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner cover-home">
        <div class="item active">
          <img src="img/1.jpg" alt="image">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item">
          <img src="img/2.jpg" alt="image">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item">
          <img src="img/3.jpg" alt="image">
          <div class="carousel-caption">
           
          </div>
        </div>
          <a href="#caro" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a href="#caro" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      {{-- <span class="carousel-control-prev-icon"></span> --}}
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      {{-- <span class="carousel-control-next-icon"></span> --}}
    </a>
  
  </div>

</div>
@endsection