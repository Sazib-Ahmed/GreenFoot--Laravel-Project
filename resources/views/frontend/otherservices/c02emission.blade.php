@extends('layouts.checkout')

@section('content')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/smoke.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 id="black_glass">Interactive Tools to Better Understand the Effects of CO2 Emissions</h2>
                        <div  class="breadcrumb__option">
                        <a id="black"><br/>Save earth today to survive tomorrow.</a><br/>
                            <a id="tree_submit" href="/carbonfootprint">Take Action Now</a>
                            <span id="black" href="/carbonfootprint">click</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Breadcrumb Section End -->
        <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h4> Carbon dioxide (CO2) is a colourless, odourless and non-poisonous gas formed by combustion of carbon and in the respiration of living organisms and is considered a greenhouse gas. Emissions means the release of greenhouse gases and/or their precursors into the atmosphere over a specified area and period of time. Carbon dioxide emissions or CO2 emissions are emissions stemming from the burning of fossil fuels and the manufacture of cement; they include carbon dioxide produced during consumption of solid, liquid, and gas fuels as well as gas flaring.   

              </h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->



    <!-- Breadcrumb Section End -->
    <iframe src="http://interactive.guim.co.uk/embed/kiln/fuelticker/combined.html" scrolling="no" style="border: 0; width: 100%; height: 600px; overflow: hidden"></iframe>
    <iframe src="https://climate.nasa.gov/interactives/climate_time_machine" scrolling="no" style="border: 0; width: 100%; height: 100%; overflow: hidden"></iframe>
    <iframe src="https://climate.nasa.gov/interactives/global-ice-viewer" scrolling="no" style="border: 0; width: 100%; height: 100%; overflow: hidden"></iframe>
        <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h3>When the carbon dioxide concentration goes up, temperature goes up. When the carbon dioxide concentration goes down, temperature goes down.
    </br>
    </br>
    Nearly all mountain glaciers and ice caps in the Arctic have retreated over the past 100 years. The total loss of ice from them probably exceeded ~150 Gt/yr in the last decade.
    </br>
    </br>
    If all ice from the Greenland Ice Sheets and from the mountains of the Arctic were to melt, global sea level will rise ~7.9 m. Then Bangladesh does not stand a chance!! Humankind must appreciate - sea level was 4 to 6 m higher than now during the Last Interglacial 125,000 years back.

            </h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->
    </br>
    </br>

        <img src="{{ asset('frontend/img/e.jpg') }}" alt="Company List" class="fullimage" width="700" height="400" ></br>
    </br>
        <img src="{{ asset('frontend/img/e1.jpg') }}" alt="Company List" class="fullimage" width="700" height="400" ></br>
    </br>
        <img src="{{ asset('frontend/img/e2.jpg') }}" alt="Company List" class="fullimage" width="700" height="400" ></br>
    </br>
        <img src="{{ asset('frontend/img/e3.jpg') }}" alt="Company List" class="fullimage" width="700" height="400" ></br>
    </br>



@endsection
