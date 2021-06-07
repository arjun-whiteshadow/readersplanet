<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Book;
use App\Models\Category;


use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::latest()->get();
        $categories = Category::all();
        $contacts = Contact::all();

        return view('contact', ['books' => $books,'categories'=>$categories,'contacts' =>'$contacts']);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contacts = Contact::all();
        return view('contact',compact('contacts'));
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

        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone_number' => 'required',
        //     'message' => 'required',
        // ]);

         

        $contact = new Contact;

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone_number = $request->input('phone_number');
        $contact->message = $request->input('message');





        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->phone_number = $request->phone_number;
        // $contact->message = $request->message;


        if( $contact->save()) {
            # code...
            return redirect()->route('welcome');

        } else {
            # code...
            return  redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
