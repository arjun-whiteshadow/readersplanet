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
       <h1>  Enter a Book </h1>
    <div class="container" style="width: 50%">

        <form action="/admin/book/store" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-group" >
                <label for="authername"> Auther Name</label>
           <input type="text"  class="form-control" name="authername" id=""> 
            </div>
        
            <div class="form-group" >
           <label for="booktitle"> Title </label>
           <input type="text"  class="form-control" name="booktitle" id=""> 
            </div>
        
        
            <div class="form-group" >
           <label for="image"> Image</label>
           <input type="file"   class="form-control" name="image" id=""> 
            </div>
        
           
        
            <div class="form-group" >
          <label for="description">Description</label>
           <textarea  class="form-control" name="description" id="" cols="30" rows="10"> </textarea>
            </div>
        
            <div class="form-group" >
         <label for="price">Price</label>:
          <input type="text" class="form-control"  name="price" id=""> 
            </div>
        
            <div class="form-group" >   
                <label for="category_id">Category</label>
              <select class="form-control"  name="category_id" id="">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                         @endforeach
              </select>
            </div> <br>

              <input type="submit" value="save">
            </form>
    </div>
</body>
</html>

