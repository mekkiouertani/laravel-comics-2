<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //
        $comics = Comic::all();
        $blueicons = config('db.blueicons');
        $footer = config('db.footerList');
        return view('comics.index', compact('comics', 'blueicons', 'footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blueicons = config('db.blueicons');
        $footer = config('db.footerList');
        return view('comics.create', compact('blueicons', 'footer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'title' => 'required|min:5|max:255',
            'price' => 'required',
            'series' => 'required',
            'type' => 'required',
            'sale_date' => 'required'

        ]);
        $formData = $request->all(); # prendo i dati del form dalla request
        //$newComic = new Comic(); # creo un nuovo prodotto
        // $newComic->fill($formData); # assegno i valori del form al nuovo prodotto
        //$newComic->save();  #redindirizzo l'utente alla pagina del nuovo prodotto appena creato
        $newComic = Comic::create($formData); # metodo più veloce ma non consente cambiamenti
        return to_route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $blueicons = config('db.blueicons');
        $footer = config('db.footerList');
        return view('comics.show', compact('comic', 'blueicons', 'footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $blueicons = config('db.blueicons');
        $footer = config('db.footerList');
        return view('comics.edit', compact('comic', 'blueicons', 'footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        /*  $comic->title = $formData['title'];
         $comic->price = $formData['price'];
         $comic->description = $formData['description'];
         $comic->type = $formData['type'];
         $comic->thumb = $formData['thumb'];
         $comic->sale_date = '2020-07-01';
         $comic->series = '2020-07-01'; */
        $comic->fill($formData);
        $comic->update();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "Il prodotto $comic->title è stato eliminato");
    }
}
