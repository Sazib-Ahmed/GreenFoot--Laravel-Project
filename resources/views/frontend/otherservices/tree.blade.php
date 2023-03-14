@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="mb-5">
      <div class="container">
          <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/tree1.jpg') }}">
              <div class="hero__text">
                  <h2 id="black_glass">Plant a Tree <br />Plant a new Life</h2>
                  <span id="save_earth">Trees are the root of our existence<br/></span> <br/>
                  <span id="save_earth">The change starts with you and me, let’s end climate change.<br/></span> <br/>
                  <a href="{{ route('carbonfootprint.index') }}"class="primary-btn">Let's cut some carbon</a>
              </div>
          </div>
      </div>
    </section>
      <!-- Breadcrumb Section End -->


    <!-- Featured Section Begin -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h3>As trees grow, they help stop climate change by removing carbon dioxide from the air, storing carbon in the trees and soil, and releasing oxygen into the atmosphere.</h3>
            </div>
          </div>
        </div>
      </div>
    <!-- Featured Section End -->






<!-- Featured Section Begin -->
<section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Every 30৳ Plants 1 Tree<br/><br/><input type="text" size="5" value="1" id="tree_number" name="n_tree" > Trees = BDT  
             
              <input type="text"  id="tree_cost" value="30"  name="c_tree" size="5" >৳<br/><br/>
              <input id="tree_submit" onclick="paymentFunction()" type="submit" name="" value="Plant Trees"><br/><br/>
              <p id="s_demo"></p><h3>
              A typical tree can absorb around 21 kilograms of carbon dioxide (CO2) per year; however, this figure is only achieved when the tree is fully grown; a small tree will absorb significantly less than this. One tree can absorb approximately one ton of CO2 over its lifetime.
</h3>
            
            </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->


   

<script>
    var treenamber;
document.getElementById("tree_number").addEventListener("keyup", costFunction);
function costFunction() {
  let x = document.getElementById("tree_cost");
  let y = document.getElementById("tree_number");
  treenamber = ((y.value)*30);
  x.value = treenamber;
}
document.getElementById("tree_cost").addEventListener("keyup", treeFunction);
function treeFunction() {
  let x = document.getElementById("tree_number");
  let y = document.getElementById("tree_cost");
  const num1 = ((y.value)/30);
  const result1 = num1.toFixed(1);
  x.value = result1;
}

function paymentFunction(){
    var txt;
    //if(treenamber<1)
    {
  if (confirm("Because this is a demonstration system, no payment gateway is included.")) {
    txt = "Thank you for planting trees.";
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





    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/carbonfootprint.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
            <a href="/carbonfootprint/calculate"><h2 id="s_page" >Calculate Carbon Footprint</h2></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->




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
