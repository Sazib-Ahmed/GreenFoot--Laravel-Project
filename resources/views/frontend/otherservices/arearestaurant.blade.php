@extends('layouts.card')

@section('content')







<!-- Breadcrumb Section Begin -->
    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="containerss">
        <div class="rowss">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Calculate Carbon Footprint</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->


    <li>
                  <a href="#">Categories</a>
                  <ul class="header__menu__dropdown">
                    @foreach($menu_categories as $menu_category)
                      <li><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></li>
                    @endforeach
                  </ul>
                </li>


              @foreach($restaurants as $restaurant)
              @if(session()->get('area')==$restaurant['area'])

              {{session()->get('area')}}

              @else
              No Restaurant Found
              {{session()->get('area')}}
              @endif

              @endforeach



        @endsection




