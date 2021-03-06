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
        $books = Books::idDescending()->paginate(5)->fragment('books');
        return view('books.books', compact('countries', 'languages', 'editors', 'authors', 'categories', 'books'));
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

        $test = $request->validate([
            'titre' => 'required|string|',
            'categorie_id' => 'required',
            'editeur_id' => 'required',
            'langue_id' => 'required',
            'description' => 'required|string|',
            'document' => "required|mimes:pdf|max:10000",
            'page' => 'required|integer|',
            'auteur_id' => 'required',
            'pays_id' => 'required',
            'photo' => '|image|',
        ]);

        $input = $request->all();
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $picture = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $picture);
            $input['photo'] = "$picture";
        }

        if ($docs = $request->file('document')) {
            $destinationPath = 'docs/';
            $books = date('YmdHis') . "." . $docs->getClientOriginalExtension();
            $docs->move($destinationPath, $books);
            $input['document'] = "$books";
        }
        
        Books::create($input);

        return redirect()->intended('books')->with('success', " Ajout effectu?? avec succes");
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
    public function edit($id)
    {
        $countries = Countries::all();
        $languages = Languages::all();
        $editors = Editors::all();
        $authors = Authors::all();
        $categories = Categories::all();
        $books = Books::find($id);
        return view('books.edit', compact('books', 'countries', 'languages', 'editors', 'authors', 'categories'));
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
        $request->validate([
            'titre' => 'required|string|',
            'categorie_id' => 'required',
            'editeur_id' => 'required',
            'langue_id' => 'required',
            'description' => 'required|string|',
            'page' => 'required|integer|',
            'auteur_id' => 'required',
            'pays_id' => 'required',
            'prix' => 'required|integer|',
            'photo' => '|image|',
            'document' => "|mimes:pdf|max:10000",
        ]);

        $input = [];
        $input['titre'] = $request->input('titre');
        $input['categorie_id'] = $request->input('categorie_id');
        $input['editeur_id'] = $request->input('editeur_id');
        $input['langue_id'] = $request->input('langue_id');
        $input['description'] = $request->input('description');
        $input['page'] = $request->input('page');
        $input['auteur_id'] = $request->input('auteur_id');
        $input['pays_id'] = $request->input('pays_id');
        $input['prix'] = $request->input('prix');



        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['photo'] = $iconeImage;
        } else {
            unset($input['photo']);
        }

        if ($docs = $request->file('document')) {
            $destinationPath = 'docs/';
            $books = date('YmdHis') . "." . $docs->getClientOriginalExtension();
            $docs->move($destinationPath, $books);
            $input['document'] = $books;
        } else {
            unset($input['document']);
        }

        // $books->where('id', $request->input('bookId'))->update($input);
        $books = Books::where('id',$request->input('bookId'))->first();
        $books->update($input);

        return redirect()->intended('books')->with('success', 'La modification a ??t?? effectu?? avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Books::find($id);
        $books->delete();
        return redirect('books')->with('success', 'La suppression a ??t?? effectu?? avec succes');
    }
}
