<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        $categories = Category::all();

        return view('welcome', ['books' => $books,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin/book/create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'authername'=> 'required|max:255',
            'booktitle'=> 'required|max:255',
            'description'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'price'=>'required',
            'category_id'=> 'required'
        ]);
        $book = new Book;

        $book->authername = $request->input('authername');
        $book->booktitle = $request->input('booktitle');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
         $book->image =  $request->file('image');
         $book->category_id = $request->input('category_id');

         //for image

       

      

       
            $newimageName = time() . '.' .$request->image->getClientOriginalExtension();
            //  $request->image->extension();
             $request->image->move(public_path('bookpic'),$newimageName);

            // $destinationPath = public_path('/images');
            // $image->move($destinationPath, $imageName);
            // $image->imagePath = $destinationPath . $imageName;
        // }

        

        
        if ( $book->save()) {
            # code...
            return redirect()->route('welcome');

        } else {
            # code...
            return redirect()->back();

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
