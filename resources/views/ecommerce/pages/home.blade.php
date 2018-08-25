@extends('ecommerce.master.template')

@section('content')
<div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Welcome to ORAJEN ECOMMERCE!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
      </header>

<div class="featured-products">
  Featured Products
  <div class="row featured-product">
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="fp-label">ORAJEN Whitening Soap</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="fp-label">ORAJEN Perfume & Cologne</div>
    </div>
    <div class="col-sm-4 featured-products">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="fp-label">ORAJEN Supplements</div>
    </div>
  </div>
</div>

<div class="cover-home">
  <div class="coverhome-label">
      ORAJEN Premium Cologne
  </div>
</div>

</div>
@endsection