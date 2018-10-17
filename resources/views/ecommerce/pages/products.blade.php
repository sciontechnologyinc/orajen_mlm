@extends('ecommerce.master.template')

@section('content')

<div class="productpage-cover">
    <div class="ppcover-overlay">
        <div class="productpage-title">
            Christmas Is Coming
        </div>
        <div class="productpage-subtitle">
            New Products <span class="new-products">Available</span>
        </div>
        <div class="button-container">
            <button class="shop-now" id="shopnow-btn">SHOP NOW</button>
        </div>  
    </div>
</div>


<div class="productpage-intro">
<div class="productpage-introtitle">Let's shop now</div>
<div class="productpage-subintro">Popular Products</div>
</div>
<div class="container">
  <div class="card-deck products">
@foreach($products as $product)

  <div class="col-sm-6 col-lg-3">
    <div class="card product">
      <img class="card-img" src="{{asset('storage/uploads/'.$product->photo)}}" alt="Card image">
      <div class="product-det"><span class="product-name"> {{ $product->productname }}</span>
        <div class="pd-desc"> {{ $product->productdescription }}</div>
        <div class="p-md" data-toggle="modal" data-target="#{{ $product->id }}">More Details</div>
      </div>
    </div>
  </div>

@endforeach
  
    
  </div>
</div>

             @foreach($products as $product)
<!-- Modal: modalQuickView -->
<div class="modal fade" id="{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
      
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100"  src="{{asset('storage/uploads/'.$product->photo)}}" 
                    alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100"  src="{{asset('storage/uploads/'.$product->photo)}}" 
                    alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100"  src="{{asset('storage/uploads/'.$product->photo)}}" 
                    alt="Third slide">
                </div>
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>
 
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong> {{ $product->productname }}</strong>
            </h2>
            <h4 class="h4-responsive">
              <span class="green-text">
                <strong> Php. {{ $product->value }}</strong>
              </span>
            </h4>

            <!--Accordion wrapper-->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne">
                  <a class="product-a" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                      Product Code <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>
      
                <!-- Card body -->
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                  data-parent="#accordion">
                  <div class="card-body">
                  {{ $product->productcode }}
                  </div>
                </div>
              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo">
                  <a class="product-a" class="collapse" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    <h5 class="mb-0">
                      Description <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                  {{ $product->productdescription }}
                  </div>
                </div>
              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree">
                  <a class="product-a" class="collapse" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                    aria-controls="collapseThree">
                    <h5 class="mb-0">
                      Details <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree"
                  data-parent="#accordion">
                  <div class="card-body">
                  {{ $product->serving }}
                  </div>
                </div>

              </div>

              
              <!-- Accordion card -->
            </div>

            <!--/.Accordion wrapper-->
            <!-- Add to Cart -->
            <div class="card-body">
              <div class="text-center right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$("#shopnow-btn").click(function() {
    $('html, body').animate({
        scrollTop: $(".productpage-intro").offset().top
    }, 2000);
});
</script>
@endforeach
@endsection