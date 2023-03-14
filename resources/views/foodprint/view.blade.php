@extends('layouts.frontend')

@section ('title')
Home Footprint
@endsection

@section ('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/scan.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 id="black_glass">Check the Carbon Footprint of Your Food and Offset It.</h2>
                        <div  class="breadcrumb__option">
                        <a id="black_glass"><br/>Save earth today to survive tomorrow.</a><br/><br/>
                            <a id="tree_submit" href="/carbonfootprint">Calculate Your Carbon Footprint</a>
                            <span id="black" href="/carbonfootprint">click</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br/><br/>
<!-- Breadcrumb Section End -->

            
    {{csrf_field()}}
    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
            <form class="normal" id="upload_form" enctype="multipart/form-data">

<table class="normal">
    
    <tr>
        <td colspan="3"><h2>Upload & Scan your Product UPC code</h2></td>
    </tr>
    
    <tr>
        <td><input type="file" name="image" id="image"></td>
    </tr>

    
    <tr>
        <td><span id="uploaded_image"></span></td>

    </tr>

    <tr>
        <td><p id="upc-code"></p></td>

    </tr>
    
</table><br>

<!-- <input type="submit"> -->
</form>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
            <table>
                        <tr>
                            <td id="product-image"></td>
                            <td  id="td-co2" style="text-align: center;" hidden>
                                <div class="green"><h3  id="co2-level-green" hidden></h3></div>
                                <div class="red"><h3 hidden  id="co2-level-red"></h3></div>
                                kgCO2eq
                            </td>                      
                        </tr>
                        <tr>
                            <td><h3 id="product-name"></h3></td>
                            <td id='td-impact' hidden>Climate Impact: <h3 id="impact"></h3></td>
                        </tr>
                    </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->
    <!-- Featured Section Begin -->
<section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Every 5৳ Offsets 1 kg CO2<br/><br/><input type="text" size="5" id="carbon" value="1"  name="n_tree" >  KG  CO2 = BDT  
              <input type="text"  id="money"  name="c_tree" value="5" size="5"  >৳<br/><br/>
              <input id="tree_submit" onclick="paymentFunction()" type="submit" name="" value="Offset CO2"><br/>
              <br/><p id="s_demo"></p> </h2> <br/><h3>
              Our carbon offsetting program consists of financing green projects, preventing deforestation, planting trees, producing green energy, etc.
              <br/><br/>You can also plant trees.
              </h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

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
				


                
                    
                


            

                  

<!-- ======================================== js- ajax======================================== -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
        $(document).ready(function(){
            $('#image').on('change', function(event){
               event.preventDefault();
               //console.log($('#image').val());
               var formData = new FormData();
               formData.append("image", $('input[type=file]')[0].files[0]);

               $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

              $.ajax({
                url:"{{url('/getupc')}}",
                type:'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                
               success:function(data) {
                  $("#uploaded_image").html(data.uploaded_image);
                //console.log(data.file_path);

///============================================ ocr api ============================================

                var form = new FormData();
                form.append("image", $('input[type=file]')[0].files[0]);
                form.append("scale", "true");

                var settings = {
                "url": "https://api.ocr.space/Parse/Image",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "apikey": "K87119355288957"
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form
                };

                $.ajax(settings).done(function (response) {
                    var json_object = JSON.parse(response)
                $('#upc-code').html(json_object.ParsedResults[0].ParsedText.replaceAll(/\s/g, ''));
                //console.log(json_object.ParsedResults[0].ParsedText.replaceAll(/ /g, ''));

//================================================= upc scan product info fetch ==================================

                $upc = json_object.ParsedResults[0].ParsedText.replaceAll(/\s/g, '');
                //console.log($upc);

                var pdata = new FormData();
                pdata.append("upc", $upc);
            
                $.ajax({
                url:"{{url('/foodprint-get-product')}}",
                type:'POST',
                data: pdata,
                contentType: false,
                cache: false,
                processData: false,
                
               success:function(data) {
                
                if(data.product.emission > 10)
                    {
                        $("#td-co2").removeAttr('hidden');
                        $("#co2-level-red").html(data.product.emission).removeAttr('hidden');
                        document.getElementById("co2-level-green").innerHTML = "";
                }
                else{
                    $("#td-co2").removeAttr('hidden');
                    $("#co2-level-green").html(data.product.emission).removeAttr('hidden');
                    document.getElementById("co2-level-red").innerHTML = "";
                }

                 $("#product-name").html(data.product.name).removeAttr('hidden');
                 $("#td-impact").removeAttr('hidden');
                 $("#impact").html(data.product.impact).removeAttr('hidden');
                 $("#product-image").html(data.product_image);
                 document.getElementById("carbon").value = data.product.emission;
                 document.getElementById("money").value = data.product.emission*5;

                                  
               }
            });
                
                
            });
                



               }
                    }); 


                
            });
          });            
          
          
         
      </script>
<!-- ======================================== js- ajax- end ======================================== -->


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
