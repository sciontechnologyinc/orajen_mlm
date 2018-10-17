@extends('ecommerce.master.template')

@section('content')
<div class="aboutus-cover">
    <div class="aboutuscover-title">OUR COMPANY</div>
</div>

<div class="container">
        <div class="row">
            <div class="mission">
            <p class="company-mission">Company Background</p>
            @foreach($abouts as $about)
            {{ $about->companybackground }}
            </div>
        </div>
        <div class="row">
            <div class="mission">
            <p class="company-mission">MISSION</p>
            {{ $about->mission }}

            </div>
        </div>
        <div class="row">
            <div class="vision">
            <p class="company-vision">VISION</p>
            {{ $about->vision }}

            @endforeach            

            </div>
        </div>
</div>
@endsection