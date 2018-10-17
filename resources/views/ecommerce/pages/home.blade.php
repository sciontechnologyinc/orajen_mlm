@extends('ecommerce.master.template')

@section('content')

<div class="homecover">
  <div class="cover-overlay">
  <div class="padding"></div>
    <div class="container">
      <div class="row">
          <div class="col col-md-12 col-lg-10 col-xl-88">
              <div class="full-width-left"> 
                <h4 class="makeiteasy">Make it easy with</h4>
                  <h1 class="orajen">
                    <span class="orajen-txt">ORAJEN</span><span class="ecommerce-txt"> eCommerce</span>
                  </h1>
                  <span class="cover-desc">A best place to create, discover and share opportunities.</span>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="gallery">
  <h2 class="pnr">PROMOTIONS & REWARDS</h2>
   <section class="customer-logos slider">
   @foreach($promotions as $promotion)

      <div class="slide"><img src="{{asset('storage/uploads/'.$promotion->photo)}}"></div>
@endforeach
      
   </section>
   </div>
</div>


<div class="section-video">
  <div class="sv-overlay">
    <div class="container">
      <div class="row">
        <div class="col-sm sv1">
          <h6 class="sv-predesc">A MUST-HAVE OF EVERY HOUSEHOLD</h6>
          <h2 class="sv-maindesc">WHAT CAN YOU DO WITH ORAJEN eCOMMERCE</h2>
          <p class="sv-postdesc">Pay your bills, buy load, game credits, sattelite subscriptions, etc and shop online - do it with rewards</p>
        </div>
        <div class="col-sm sv2">
        <video controls id="myVideo">
          <source src="/videos/Cover_Video.MP4" type="video/mp4">
        </video>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <!-- Gallery -->
      <!-- Gallery -->
<div class="featured-products">
  <span class="fp-title">PRODUCT PACKAGES</span>
</div>
</div>

  <div class="package1">
    <div class="package1-overlay">
      <div class="container">
        <div class="row">
          <div class="col-sm pckg1">
          <span class="package1-hover">Package Inclusions</span>
            <div class="package-desc">
              <h5 class="packge1-inc">Php 1,500.00</h5>
              <h5 class="packge1-inc">1 Bottle of Perfume</h5>
              <h5 class="packge1-inc">1 pc Guava Soap</h5>
              <h5 class="packge1-inc">2 Packs 350g Real Detergent Powder</h5>
              <h5 class="packge1-inc">+2 pcs sachet 50g Real Detergent Powder(Free)</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="package2">
    <div class="package2-overlay">
      <div class="container">
        <div class="row">
          <div class="col-sm pckg2">
          <span class="package2-hover">Package Inclusions</span>
            <div class="package-desc">
              <h5 class="packge2-inc">Php 1,500.00</h5>
              <h5 class="packge2-inc">1 Bottle of Perfume</h5>
              <h5 class="packge2-inc">1 pc Guava Soap</h5>
              <h5 class="packge2-inc">2 Packs 350g Real Detergent Powder</h5>
              <h5 class="packge2-inc">+2 pcs sachet 50g Real Detergent Powder(Free)</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>

    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });


</script>
@endsection