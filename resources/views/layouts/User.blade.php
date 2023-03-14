<!Doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/CSS/UserStyle.css">

<img src="/Images/PageLogo.png" alt="this is logo" width = "400">

</head>
    @yield('body')

</div>
        <div class="sticky">
        <div class="topnav">
        <a href="home"> Home</a>
        <div class="dropdown">
  <button class="dropbtn">Choose Background</button>
  <div class="dropdown-content">
  <div class="dropdownbutton">
    <table>
  <form action="/backgrounddefault" method="GET" enctype="multipart/form-data">
            {{csrf_field()}}
  <input name="backgrounddefault" type="submit" value="Default Background"><br>
</form>

  <form action="/background1" method="GET" enctype="multipart/form-data">
            {{csrf_field()}}
  <input name="background1" type="submit" value="Background  1"><br>
</form>
<form action="/background2" method="GET" enctype="multipart/form-data">
            {{csrf_field()}}
  <input name="background2" type="submit" value="Background  2"><br>
</form>
<form action="/background3" method="GET" enctype="multipart/form-data">
            {{csrf_field()}}
  <input name="background3" type="submit" value="Background  3"><br>
</form>
</table>


  
  </div>
  </div>
</div>
        <a href="registration"> Register</a>
       <a href="login">Login</a>
      
</div>
</div>

        @yield('content')
        
    </body>
</html>
