@extends('layouts.template')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1> CV. NEED A CAR </h1>
      <h2>TRUSTED MALANG CAR RENTAL</h2>
      <h3>The most complete fleet of car rental services in Pekanbaru, high year output. Immediately enjoy the best service from us.Call us at 081 370 587 320</h3>

      <!-- kategori produk -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <!-- <h2 class="text-center">Kategori Produk</h2> -->
    </div>
    <!-- kategori pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <!-- <a href="{{ URL::to('kategori/satu') }}">
          <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top"> -->
        </a>
        <div class="card-body">
          <!-- <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none"> -->
            <p class="card-text"><h2 class="text-center">Latest Fleet</h2><br>
            <h5 class="text-justify">You don't have to worry about getting an old car! 
              The rental cars that we provide are cars with very good conditions that will make you comfortable during the trip.</h5></p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <!-- <a href="{{ URL::to('kategori/dua') }}">
          <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top"> -->
        </a>
        <div class="card-body">
          <!-- <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none"> -->
            <p class="card-text"><h2 class="text-center">Competitive price!</h2><br>
<h5 class="text-justify">Junior Rentcar Pekanbaru offers competitive prices, 
good service quality and provides a fleet that is regularly maintained and insured in excellent condition.</h5></p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <!-- <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top"> -->
        <!-- </a> -->
        <div class="card-body">
          <!-- <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none"></a> -->
            <p class="card-text"><h2 class="text-center">Experienced</h2><br>
              <h5 class="text-justify">Need-A-Car is owned and managed by people who have long experience in the field of car rental services. 
              For more than Decades we attach great importance to the quality of the services provided.</h5></p>
          
        </div>
      </div>
    </div>
  </div>
  <!-- end kategori produk -->
    </div>
  </div>
</div>
@endsection