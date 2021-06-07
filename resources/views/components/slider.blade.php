<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="csss/style_su.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<!----------------- This below block of code will run sliding images in home page ---------------------->


<div id="demo" class="carousel slide" data-ride="carousel" style="width: 100%">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>


    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="images/main_bg.jpg" alt="book_bg" width="1100" height="500">
        <div class="carousel-caption">
          <h1 style="font-size: 30pt;">Find your favorite books here</h1>
        </div>
      </div>

      <div class="carousel-item">
          <img src="images/main_bg0.jpg" alt="book_bg" width="1100" height="500">
          <div class="carousel-caption">
            <h1 style="font-size: 30pt;">Readers Planet, finders heaven</h1>
          </div>
      </div>
      
      <div class="carousel-item">
          <img src="images/main_bg1.jpg" alt="book_bg" width="1100" height="500">
          <div class="carousel-caption">
            <h1 style="font-size: 30pt;">New books released every week</h1>
          </div>
      </div>

    </div>


  <div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>

