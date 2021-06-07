<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
       <h1>  Enter a Category </h1>
    <div class="container" style="width: 50%">

        <form action="/admin/book/storecat" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" >
                <label for="category_name"> Category Name</label>
           <input type="text"  class="form-control" name="category_name" id=""> 
            </div>

        
          
              <input type="submit" value="save">
            </form>
    </div>
</body>
</html>

