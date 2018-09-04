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
  Packages
  <div class="row featured-product">
    <div class="card-deck">
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="/images/packages/package_1.jpg" alt="Package 1">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title package">Package 1</h4>
                <p class="card-text package">1 Bottle of Perfume<br> 1 pc Guava Soap<br> 2 packs 350 Real Detergent Powder<br> 2 pcs sachet 50g Real Detergent Powder(Free)</p>
            </div>
        </div>
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="/images/packages/package_2.jpg" alt="Package 2">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title package">Package 2</h4>
                <p class="card-text package">1 Set Perfume Tester<br> 1 pc Tawas Soap<br> 3 packs 350g Real Detergent Powder<br> 3 pcs sachet 50g Real Detergent Powder<br> 1 pc Papaya Soap(Free)</p>
            </div>
        </div>
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="/images/packages/package_3.jpg" alt="Package 3">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title package">Package 3</h4>
                <p class="card-text package">1 bot of Perfume 50ml for Men<br> 1 bot of Perfume 35ml for Women<br> 1 pc Glutamansi Soap<br> 1 pack 350g Real Detergent Powder<br> 2 pcs sachet 50g Real Detergnet Powder(Free)</p>
            </div>
        </div>
    </div>
  </div>
  <div class="row featured-product">
    <div class="card-deck">
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="/images/packages/package_4.jpg" alt="Package 4">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title package">Package 4</h4>
                <p class="card-text package">2 bot of Perfume 35ml for Women<br> 1 pc Placenta Soap<br> 1 pack 350g Real Detergent Powder<br> 2 pcs sachet 50g Real Detergent Powder(Free)</p>
            </div>
        </div>
        <div class="card mb-4">
            <div class="view overlay">
                <img class="card-img-top" src="/images/packages/package_5.jpg" alt="Package 5">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title package">Package 5</h4>
                <p class="card-text package">1 bot of Perfume 35ml for Women<br> 1 bot of Perfume 50ml for Men<br> 1 pc Bleaching Soap<br> 1 pack 350g Real Powder Detergent<br> 2 pcs sachet 50g Real Detergent Powder(Free)</p>
            </div>
        </div>
        <div class="card mb-4">
        </div>
    </div>
  </div>
</div>

</div>
@endsection