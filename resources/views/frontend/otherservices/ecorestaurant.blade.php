@extends('layouts.card')

@section('content')

<!-- Breadcrumb Section Begin -->
      <div class="container">
          <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/restaurant.jpg') }}">
              <div class="hero__text">
                  <h2 id="save_earth">Eco-friendly  <br />Restaurants</h2>
                  <span id="save_earth">Restaurant that uses eco-friendly foods, reusable products, and recyclable packaging<br/></span> <br/>
              </div>
          </div>
      </div>
      <!-- Breadcrumb Section End -->
<br/>


<!-- Breadcrumb Section Begin -->
    <!-- Featured Section Begin -->
      <div class="containerss">
        <div class="rowss">
          <div class="col-lg-12">
            <div class="section-title">
              <h3><li>
                  <a href="#">Select Area:</a></h3><h4>
                  <ul class="dropdown">
                  <li><a class="dropdown-item" href='/restaurant/all'>All</a></li>
                  @foreach($restaurants as $restaurant)
                    <li><a class="dropdown-item" href='/restaurant/{{$restaurant["area"]}}'>{{ $restaurant['area'] }}</a></li>
                  @endforeach
              
                  </ul>
                </li></h4>
            </div>
          </div>
        </div>
      </div>
    <!-- Featured Section End -->

    


          
              
              



<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Available Restaurants </h5>
        <div class="row">


        @if(session()->get('area')==null)

        @foreach($restaurants as $restaurant)
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>


    <iframe
    class=" img-fluid"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="{{$restaurant['map']}}" alt="card image">
</iframe>
  
  
  </p>
                                    <h4 class="card-title">{{$restaurant['name']}}</h4>
                                    <p class="card-text">{{$restaurant['address']}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{$restaurant['name']}}</h4>
                                    <p class="card-text">{{$restaurant['description']}}</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

              @endforeach

        @elseif(session()->get('area')=='all')

        @foreach($restaurants as $restaurant)
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>


    <iframe
    class=" img-fluid"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="{{$restaurant['map']}}" alt="card image">
</iframe>
  
  
  </p>
                                    <h4 class="card-title">{{$restaurant['name']}}</h4>
                                    <p class="card-text">{{$restaurant['address']}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{$restaurant['name']}}</h4>
                                    <p class="card-text">{{$restaurant['description']}}</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            

              @endforeach

        @else




        @foreach($restaurants as $restaurant)
              @if(session()->get('area')==$restaurant['area'])
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>


    <iframe
    class=" img-fluid"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="{{$restaurant['map']}}" alt="card image">
</iframe>
  
  
  </p>
                                    <h4 class="card-title">{{$restaurant['name']}}</h4>
                                    <p class="card-text">{{$restaurant['address']}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{$restaurant['name']}}</h4>
                                    <p class="card-text">{{$restaurant['description']}}</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            @endif

              @endforeach
              @endif

        </div>
    </div>
</section>
<!-- Team -->


        @endsection