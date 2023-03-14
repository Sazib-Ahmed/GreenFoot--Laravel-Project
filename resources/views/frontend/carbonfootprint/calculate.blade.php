@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Section Begin -->
    <!-- Featured Section Begin -->
    
      <div class="containerss">
        <div class="rowss">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Calculate and Offset Your Carbon Footprint</h2>
            </div>
          </div>
        </div>
      </div>

    <!-- Featured Section End -->
    
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/calculate.jpg') }}">
      <div class="container" >
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>.</h2>
              <div class="breadcrumb__option">
                <a href="/home">.</a>
                <span href="/">.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->



    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
            <iframe width="100%" height="550" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" src="https://calculator.carbonfootprint.com/calculator.aspx"></iframe>
            </div>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->




<!-- Featured Section Begin -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Every 5৳ Offsets 1 kg CO2<br/><br/><input type="text" size="5" id="carbon" value="1" name="n_tree" >  KG  CO2 = BDT  
              <input type="text"  id="money"  name="c_tree" size="5" value="5" >৳<br/><br/>
              <input id="tree_submit" onclick="paymentFunction()" type="submit" name="" value="Offset CO2"><br/>
              <br/><p id="s_demo"></p> </h2><br/></br><h3>Our carbon offsetting program consists of financing green projects, preventing deforestation, planting trees, producing green energy, etc.
              <br/><br/>You can also plant trees.
              </h3>
            
            </div>
          </div>
        </div>
      </div>
      <img src="{{ asset('frontend/img/fuel.jpg') }}" alt="Company List" class="fullimage" width="800" height="400" ></br>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/planttrees.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
            <a href="/tree"><h2 id="s_page">Click here to Plant Trees</h2></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Breadcrumb Section End -->

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h3>A typical tree can absorb around 21 kilograms of carbon dioxide (CO2) per year; however, this figure is only achieved when the tree is fully grown; a small tree will absorb significantly less than this. One tree can absorb approximately one ton of CO2 over its lifetime.

            </h3>
            </div>
          </div>
        </div>
      </div>


      <section class="mb-5">
      <div class="container">
          <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/offset.jpg') }}">
              <div class="hero__text">
              </div>
          </div>
      </div>
    </section>
      



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
   

<script>
    var treenamber;
document.getElementById("carbon").addEventListener("keyup", costFunction);
function costFunction() {
  let x = document.getElementById("money");
  let y = document.getElementById("carbon");
  treenamber = ((y.value)*5);
  x.value = treenamber;
}
document.getElementById("money").addEventListener("keyup", treeFunction);
function treeFunction() {
  let x = document.getElementById("carbon");
  let y = document.getElementById("money");
  const num1 = ((y.value)/5);
  const result1 = num1.toFixed(3);
  x.value = result1;
}

function paymentFunction(){
    var txt;
    //if(treenamber<1)
    {
  if (confirm("Because this is a demonstration system, no payment gateway is included.")) {
    txt = "Thank you for offsetting CO2.";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("s_demo").innerHTML = txt;
//}
//else{
    //txt ="Please plant at least one tree.";
    //document.getElementById("s_demo").innerHTML = txt;
}

}
</script>



        @endsection