@extends('layouts.frontend')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <!-- Breadcrumb Section Begin -->
    <section class="mb-5">
      <div class="container">
          <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/shop.jpg') }}">
              <div class="hero__text">
                  <span id="save_earth">100% carbon emmision free<br/>We only deliver products by bicycle or on foot</span>

                  <h2 id="save_earth"> All Our Products Carbon Emmision is <br />Net Zero</h2>
                  <span id="save_earth">Because we already off-seted their carbon emissions</span><br/>
                  <a href="/shop" class="primary-btn">SHOP NOW</a>
              </div>
          </div>
      </div>
    </section>
      <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-5">
            @include('frontend.shop.sidebar')
          </div>
          <div class="col-lg-9 col-md-7">
            <livewire:shop.product-tag-component  :slug="$slug"/>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Section End -->
@endsection
