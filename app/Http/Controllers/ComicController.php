<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request): View
    {
        $blueicons = config('db.blueicons');
        $footer = config('db.footerList');
        //dd($request->all());
        if (!empty($request->query('search'))) {
            $search = $request->query('search');
            $comics = Comic::where('type', $search)->get();
        } else {
            $comics = Comic::all();
            $blueicons = config('db.blueicons');
            $footer = config('db.footerList');
        }
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
     * @return  \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        //dd($request->all());
        $formData = $request->validated(); # prendo i dati del form dalla request
        $newComic = Comic::create($formData); # metodo più veloce ma non consente cambiamenti
        return to_route('comics.show', $newComic->id);
    }
    /*   public function store(Request $request)
      {
          $formData = $request->all();
          $newComic = new Comic();
          $newComic->title = $formData['title'];
          $newComic->price = $formData['price'];
          $newComic->description = $formData['description'];
          $newComic->type = $formData['type'];
          $newComic->sale_date = '2020-07-01';
          $newComic->series = '2020-07-01';
          $newComic->save();
          return to_route('comics.index');
      } */

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
     * @return
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
     * @return
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $formData = $request->validated();
        $comic->fill($formData);
        $comic->update();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "Il prodotto $comic->title è stato eliminato");
    }

    /**
     * summary of validation
     * @return
     */
    /*   private function validation($data)
      {
          $validator = Validator::make($data, [
              'title' => 'required|min:5|max:255',
              'price' => 'required|max:255',
              'series' => 'required|max:255',
              'type' => 'required|max:255',
              'sale_date' => 'required|max:255'
          ], [
              'title.required' => 'Il campo titolo è obbligatorio',
              'title.min' => 'Il campo titolo deve avere almeno :min caratteri',
              'title.max' => 'Il campo titolo deve avere massimo :max caratteri',
          ])->validate();
          return $validator;
      } */
}
