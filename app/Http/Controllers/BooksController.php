<?php

namespace App\Http\Controllers;

use App\Authors;
use App\Books;
use App\Categories;
use App\Countries;
use App\Editors;
use App\Languages;
use Illuminate\Http\Request;
use League\CommonMark\Block\Element\Document;

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
        
     $request->validate([
            'titre'=>'required|string|',
            'categorie_id' => 'required',
            'editeur_id' => 'required',
            'langue_id' => 'required',
            'description' => 'required|string|',
            // 'document' => 'required|string|',
            'page' => 'required|integer|',
            'auteur_id' => 'required',
            'pays_id' => 'required',
            'prix' => 'required|integer|',
            'photo' => '|image|',
        ]);

        $input = $request->all();
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $picture = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $picture);
            $input['photo'] = "$picture";
        }
        $data=new Document;
        if ($request->file('document')){
            $pdf=$request->file('document');
            $filename= time(). "." . $pdf->getClientOriginalExtension();
            $request->document->move('storage/'. $filename);
        }
        Books::create($input);

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