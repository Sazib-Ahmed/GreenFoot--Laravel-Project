@extends('layouts.checkout')

@section('content')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/comparebutton.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 id="black_glass">Carbon Carbon Emission</h2>
                        <div class="breadcrumb__option"><br/>
                        <a id="black_glass">When buying products, make an informed decision.</a><br/><br/>
                        <strong> <a id="tree_submit" href="/">Buy Our Products</a></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <br/><br/>
    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
                

            <h3> To find greener businesses, enter a product category.<br/> <br/>
            <strong>Product Categorie:</strong>
            
            <input type="text" size="10" id="carbon" value="Phone"  name="n_tree" ><br/><br/> Where number 1 is better.
</h3>
            
            <br/><br/><br/><br/><br/>

            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
            <h3><strong>Businesses:</strong></br><br/>
            1.&nbsp;<input type="text" id="c1" value="Farephone"  name="c1" ></p> 
            2.&nbsp;<input type="text" id="c2" value="Apple"  name="c2" ></p> 
            3.&nbsp;<input type="text" id="c3" value="Dell"  name="c3" ></p> 
            4.&nbsp;<input type="text" id="c4" value="HP"  name="c4" ></p> 
            5.&nbsp;<input type="text" id="c5" value="Lenovo"  name="c5" ></p> <br/>
</h3>



            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->

   
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">

            <h2>Some Companies Carbon Emission Efficiency Score</h2>
            
            </div>
          </div>
        </div>
      </div>

    
    <img src="{{ asset('frontend/img/elcompany.jpg') }}" alt="Company List" class="fullimage" width="600" height="400" >
    <img src="{{ asset('frontend/img/allcompany.jpg') }}" alt="Company List" class="fullimage" width="600" height="400" >


<script>
    var treenamber;
document.getElementById("carbon").addEventListener("keyup", costFunction);
function costFunction() {

  let c = document.getElementById("carbon").value;
  let cat=c.toLowerCase();
  if(cat=="phone"){
    document.getElementById("c1").value = "Farephone";
    document.getElementById("c2").value = "Apple";
    document.getElementById("c3").value = "Dell";
    document.getElementById("c4").value = "HP";
    document.getElementById("c5").value = "Lenovo";

  }
  else if(cat=="electronics"){
    document.getElementById("c1").value = "Google";
    document.getElementById("c2").value = "Apple";
    document.getElementById("c3").value = "Microsoft";
    document.getElementById("c4").value = "Intel";
    document.getElementById("c5").value = "Samsung";

  }
  else if(cat=="it"){
    document.getElementById("c1").value = "Google";
    document.getElementById("c2").value = "Apple";
    document.getElementById("c3").value = "Microsoft";
    document.getElementById("c4").value = "Cisco";
    document.getElementById("c5").value = "SAP America";

  }
  else{
    document.getElementById("c1").value = "Not Available";
    document.getElementById("c2").value = "Not Available";
    document.getElementById("c3").value = "Not Available";
    document.getElementById("c4").value = "Not Available";
    document.getElementById("c5").value = "Not Available";

  }


//   let x = document.getElementById("c1").value;
//   let y = document.getElementById("carbon").value;
//   x.value = treenamber;

//   document.getElementById("c2").value = "Johnny Bravo";

//   document.getElementById("demo").innerHTML = document.getElementById("carbon").value;


}
// document.getElementById("money").addEventListener("keyup", treeFunction);
// function treeFunction() {
//   let x = document.getElementById("carbon");
//   let y = document.getElementById("money");
//   const num1 = ((y.value)/5);
//   const result1 = num1.toFixed(3);
//   x.value = result1;
// }

// function paymentFunction(){
//     var txt;
//     //if(treenamber<1)
//     {
//   if (confirm("Because this is a demonstration system, no payment gateway is included.")) {
//     txt = "Thank you for offsetting CO2.";
//   } else {
//     txt = "You pressed Cancel!";
//   }
//   document.getElementById("s_demo").innerHTML = txt;
// //}
// //else{
//     //txt ="Please plant at least one tree.";
//     //document.getElementById("s_demo").innerHTML = txt;
// }

// }
</script>





@endsection
