<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style_su.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<h2 style="text-align: center; margin-top: -3cm; margin-bottom: 1cm;">Recommended Books</h2>

           

              <section class="my-5">
                <div class="py-5">
                </div>
            

<h2 style="text-align: center; margin-top: -3cm; margin-bottom: 1cm;">Recommended Books</h2>


                     {{-- @foreach ($books as $book) 
          <div class="col-lg-6 col-md-3 col-12">                                          <!--This line will create a 4 column grid-->
            <div class="card">
              <img class="card-img-top" src="images/Book-Image1.jpeg" alt="Card image">   <!--Insert images in the grid-->
              <div class="card-img-overlay">
                <h4 style="margin-top: 10cm;" class="card-title">{{$book->booktitle}}</h4>
                <p class="card-text">#1 New York Times Bestseller.</p>
                <a href="#" class="btn btn-primary">Order now</a>                       <!--Order now button-->                
              </div>
              @endforeach --}}




              <div class="row">
                @foreach($books as $book)
                @foreach($categories as $category)
              <div class="col-lg-3 col-md-3 col-12">
                      
                            <article
                            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                            <div class="py-6 px-5 " >
                                <div>
                                    <img src="images/Book-Image1.jpeg" alt="Blog Post illustration" class="rounded-xl">
                                </div>

                                <div class="mt-8 flex flex-col justify-between">
                                    <header>
                                        <div class="space-x-2">
                                            <a href="#"
                                                class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                                style="font-size: 10px">{{$category->category_name}}</a>
                                            <a href="#"
                                                class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                                style="font-size: 10px">Updates</a>
                                        </div>

                                        <div class="mt-4">
                                            <h1 class="text-3xl">
                                                {{$book->booktitle}}                              </h1>

                                            <span class="mt-2 block text-gray-400 text-xs">
                                                Published <time>1 day ago</time>
                                            </span>
                                        </div>
                                    </header>

                                    <div class="text-sm mt-4">
                                        <p>
                                            {{$book->description}}
                                        </p>

                                        <p class="mt-4">
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </p>
                                    </div>

                                   

                                        <div>
                                            <a href="#"
                                                class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                            >
                                                Read More
                                            </a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </article>   
                    
                  
        </div>               

            @endforeach 
            @endforeach
        </div>


              </section>

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            


    

      
