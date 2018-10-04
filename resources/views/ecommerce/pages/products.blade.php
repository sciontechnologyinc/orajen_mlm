@extends('ecommerce.master.template')

@section('content')

<div class="productpage-cover">
    <div class="ppcover-overlay">
        <div class="productpage-title">
            Christmas Is Coming
        </div>
        <div class="productpage-subtitle">
            New Products <span class="new-products">Supplements</span>
        </div>
        <div class="button-container">
            <button class="shop-now">SHOP NOW</button>
        </div>  
    </div>
</div>


<div class="productpage-intro">
<div class="productpage-introtitle">Let's shop now</div>
<div class="productpage-subintro">Popular Products</div>
</div>

<div class="container">
  <div class="card-deck products">
    <div class="card product">
      <img class="card-img" src="/images/products/8-re.jpg" alt="Card image">
      <div class="product-det"><span class="product-name">Orajen Cee</span>
        <div class="pd-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
        <div class="p-md">More Details</div>
      </div>
    </div>
    <div class="card product">
      <img class="card-img" src="/images/products/9-re.jpg" alt="Card image">
      <div class="product-det"><span class="product-name">Arya Perfume</span>
        <div class="pd-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
        <div class="p-md">More Details</div>
      </div>
    </div>
    <div class="card product">
      <img class="card-img" src="/images/products/10-re.jpg" alt="Card image">
       <div class="product-det"><span class="product-name">Blake Perfume</span>
        <div class="pd-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
        <div class="p-md">More Details</div>
      </div>
    </div>
  </div>

  <div class="card-deck products">
    <div class="card product">
      <img class="card-img" src="/images/products/11-re.jpg" alt="Card image">
      <div class="product-det"><span class="product-name">borgX Perfume</span>
        <div class="pd-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
        <div class="p-md">More Details</div>
      </div>
    </div>
    <div class="card product">
      <img class="card-img" src="/images/products/12-re.jpg" alt="Card image">
      <div class="product-det"><span class="product-name">Dhane Perfume</span>
        <div class="pd-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
        <div class="p-md">More Details</div>
      </div>
    </div>
    <div class="card product">
      <img class="card-img" src="/images/products/13-re.jpg" alt="Card image">
      <div class="product-det"><span class="product-name">Yhonarich Perfume</span>
        <div class="pd-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
        <div class="p-md">More Details</div>
      </div>
    </div>
  </div>
</div>

@endsection