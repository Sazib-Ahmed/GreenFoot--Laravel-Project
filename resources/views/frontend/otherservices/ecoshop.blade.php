@extends('layouts.card')

@section('content')

<!-- Breadcrumb Section Begin -->
      <div class="container">
          <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/mainecoshop.jpg') }}">
              <div class="hero__text">
                  <h2 id="save_earth">Shops  <br />That Sell Our Eco=friendly Products</h2>
                  <span id="save_earth">not harmful to the environmentn, designed to have little or no damaging effect on the environment<br/></span> <br/>
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
                  <li><a class="dropdown-item" href='/ecoshop/all'>All</a></li>
                  @foreach($ecoshops as $ecoshop)
                    <li><a class="dropdown-item" href='/ecoshop/{{$ecoshop["area"]}}'>{{ $ecoshop['area'] }}</a></li>
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
        <h5 class="section-title h1">Available Ecoshops </h5>
        <div class="row">


        @if(session()->get('area')==null)

        @foreach($ecoshops as $ecoshop)
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
  src="{{$ecoshop['map']}}" alt="card image">
</iframe>
  
  
  </p>
                                    <h4 class="card-title">{{$ecoshop['name']}}</h4>
                                    <p class="card-text">{{$ecoshop['address']}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{$ecoshop['name']}}</h4>
                                    <p class="card-text">{{$ecoshop['description']}}</p>
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

        @foreach($ecoshops as $ecoshop)
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
  src="{{$ecoshop['map']}}" alt="card image">
</iframe>
  
  
  </p>
                                    <h4 class="card-title">{{$ecoshop['name']}}</h4>
                                    <p class="card-text">{{$ecoshop['address']}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{$ecoshop['name']}}</h4>
                                    <p class="card-text">{{$ecoshop['description']}}</p>
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




        @foreach($ecoshops as $ecoshop)
              @if(session()->get('area')==$ecoshop['area'])
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
  src="{{$ecoshop['map']}}" alt="card image">
</iframe>
  
  
  </p>
                                    <h4 class="card-title">{{$ecoshop['name']}}</h4>
                                    <p class="card-text">{{$ecoshop['address']}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{$ecoshop['name']}}</h4>
                                    <p class="card-text">{{$ecoshop['description']}}</p>
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