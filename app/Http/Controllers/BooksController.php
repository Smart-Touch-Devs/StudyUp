<?php

namespace App\Http\Controllers;

use App\Authors;
use App\Books;
use App\Categories;
use App\Countries;
use App\Editors;
use App\Languages;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Countries::all();
        $languages = Languages::all();
        $editors = Editors::all();
        $authors = Authors::all();
        $categories = Categories::all();
        return view('books.books',compact('countries','languages','editors','authors','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     $data=$request->validate([
            'titre'=>'required|string|',
            'categorie_id' => 'string',
            'editeur_id' => 'string',
            'langue_id' => 'string',
            'description' => 'required|string|',
            'page' => 'required|integer|',
            'auteur_id' => 'string',
            'pays_id' => 'string',
            'prix' => 'required|integer|',
            'photo' => '|image|',
        ]);
dd($data);
        $input = $request->all();
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $picture = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $picture);
            $input['photo'] = "$picture";
        }
        Books::create($input);
        

        // $image = request('photo')->store('image','public');
               
        
        // Books::create([
        //     'titre'=>request('titre'),
        //     'categorie_id'=>request('categorie_id'),
        //     'editeur_id'=>request('editeur_id'),
        //     'langue_id'=>request('langue_id'),
        //     'description'=>request('description'),
        //     'page'=>request('page'),
        //     'auteur_id'=>request('auteur_id'),
        //     'pays_id'=>request('pays_id'),
        //     'prix'=>request('prix'),
        //     'meuble'=>request('meuble'),
        //     'photo'=>request('photo'),
        //     'photo'=>$image,
    
       // ]);
        return redirect()->intended('books')->with('success', "L'article a été ajouté avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
        //
    }
}
