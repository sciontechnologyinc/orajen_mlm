@extends('ecommerce.master.template')

@section('content')
<div class="cover-video">
<video autoplay muted loop id="myVideo">
  <source src="/videos/Cover_Video.mp4" type="video/mp4">
</video>
</div>


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
        <img class="card-img-top" src="images/products/1.jpg" alt="">
        <div class="fp-label">ORAJEN Placenta Organic Soap</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="images/products/2.jpg" alt="">
        <div class="fp-label">ORAJEN Guava Organic Soap</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="images/products/3.jpg" alt="">
        <div class="fp-label">ORAJEN Glutamansi Organic Soap</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="images/products/4.jpg" alt="">
        <div class="fp-label">ORAJEN Bleaching Organic Soap</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="images/products/6.jpg" alt="">
        <div class="fp-label">ORAJEN REAL Detergent Powder</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="images/products/5.jpg" alt="">
        <div class="fp-label">ORAJEN Tawas Organic Soap</div>
    </div>
  </div>
</div>

</div>
@endsection