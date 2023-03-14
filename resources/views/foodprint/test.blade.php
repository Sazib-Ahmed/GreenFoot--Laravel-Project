@extends('layouts.frontend')

@section ('title')
Home Footprint
@endsection

@section ('content')


      <body>
        <meta name="csrf-token" content="{{ csrf_token() }}">
	
            <div class="container">
    {{csrf_field()}}
				        <form class="normal" id="upload_form" enctype="multipart/form-data">

                    <table class="normal">
                        
                        <tr>
                            <td><input type="text" placeholder="weight" id="weight"></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="unit" id="unit"></td>
                        </tr>
                                                
                    </table><br>

                    <input type="submit">


                </form>

            </div>

                  
      </body>
<!-- ======================================== js- ajax======================================== -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
        $(document).ready(function(){
            $('#upload_form').on('submit', function(event){
               event.preventDefault();
               var form = new FormData();
                form.append("weight", $("#weight").val());
                form.append("unit", $("#unit").val());

                var settings = {
                "url": "https://app.trycarbonapi.com/api/treeEquivalent",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiZjE5YTMyMWRmNzE1MTNlNTJhZWExMDhjMGFhMTIyZDZjOWM5ZTI3YjJjMDMwNzg5MTczMWJjNzU4YjRhMTAyNGVlMTJiZmVmNDc1OTFhY2MiLCJpYXQiOjE2NjgxNzIzNTAsIm5iZiI6MTY2ODE3MjM1MCwiZXhwIjoxNjk5NzA4MzUwLCJzdWIiOiIyMTE0Iiwic2NvcGVzIjpbXX0.XrA2fkvNH7ZWHGwklkOFmchoEfqciuZROi0sZY_kNqrgpJ60EHtw3JAeXHv93z6nyrP7TEdZZofmzAg1ZbQp9w"
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form
                };

                $.ajax(settings).done(function (response) {
                console.log(response);
                });
               

            });
          });            
          
          
         
      </script>
<!-- ======================================== js- ajax- end ======================================== -->
								
@endsection
