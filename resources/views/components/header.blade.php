<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="csss/style_su.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Readersplant</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ReadersPlanet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>     <!--Home page anchor link-->
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>   <!--Login page link-->
            </li>
    
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Register</a>   <!--New Registration page link-->
            </li>
    
            <li class="nav-item">
              <a class="nav-link" href="{{ route('welcome') }}">Categories</a>     <!--Books Categories page link-->
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact us</a>      <!--Contact us page link-->
            </li>
    
            <li class="nav-item">
              <a class="nav-link" href="cart.html">Cart</a>               <!--Shopping cart page link-->
            </li>
    
          </ul>
          <form class="form-inline my-2 my-lg-0" action="{{ route('login') }}" method="GET">
            
            <input class="form-control mr-sm-2" type="search" placeholder="Type Book Name" aria-label="Search" name="query">
            {{-- <button class="btn btn-outline-success my-2 my-sm-0" name="submit"  value="save" type="submit">Find books now</button> --}}
            
          </form>


       

        </div>
      </nav>
    
</head>
    
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
