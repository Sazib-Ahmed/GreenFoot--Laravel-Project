@extends('layouts.frontend')

@section('content')
<!-- Featured Section Begin -->
<section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Choose a Service</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/scan.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
            <a href="/carbonfootprint/calculate" id="b_submit" ><h2 id="bl">Scan Food to See It's Carbon Footprint</h2></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/carbonfootprint.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
            <a href="/carbonfootprint/calculate" id="b_submit" ><h2 id="bl">Calculate and Offset Carbon Footprint</h2></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/comparebutton.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
            <a ><h2 id="s_page"></h2></a>
            <a href="/compare" id="b_submit" ><h2 id="bl">Compare Footprint</h2></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/ecopro.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
            <a href="/" id="b_submit" ><h2 id="bl">Shop Eco-Friendly Products</h2></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/restaurantbutton.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
            <a href="/ecoshop" id="b_submit" ><h2 id="bl">Find the Nearest Shop with Our Eco-friendly Products</h2></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/rest.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
            <a href="/restaurant" id="b_submit" ><h2 id="bl">Find the Nearest Eco-Friendly Restaurant</h2></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/planttrees.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
            <a href="/tree" id="b_submit" ><h2 id="bl">Plant Trees</h2></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->
</br>
</br>






    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('frontend/img/banner/banner-2.jpg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->
@endsection
