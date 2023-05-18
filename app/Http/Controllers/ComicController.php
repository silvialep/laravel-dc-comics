<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $this->validateForm($request);

        $newComic = new Comic();
        
        $newComic->fill($formData);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        return view('comics/edit', compact('comic'));
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

        $this->validateForm($request);

        $comic->update($formData);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
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
        return redirect()->route('comics.index');
    }

    private function validateForm($request) 
    {
        $request->validate([
            'title' => 'required|min:5|max:100',
            'description' => 'required|max:1000',
            'thumb' => 'required|max:255',
            'price' => 'required|max:20',
            'series' => 'required|max:20',
            'sale_date' => 'required',
            'type' => 'required|max:50',
        ],
        [
            'title.required' => 'Il campo del titolo è richiesto',
            'title.min' => 'Il campo del titolo deve essere almeno di 5 caratteri',
            'title.max' => 'Il campo del titolo deve essere al massimo di 100 caratteri',
            'description.required' => 'Il campo della descrizione è richiesto',
            'thumb.required' => 'Il link all\'immagine è richiesto',
            'price.required' => 'Il campo del prezzo è richiesto',
            'series.required' => 'Il nome della serie è richiesto',
            'sale_date.required' => 'La data di pubblicazione è richiesta',
            'type.required' => 'La tipologia di comic è richiesta',

        ]);


        // $data = $request->all();

        // $validator = Validator::make(
        //     $data,
        //     [
        //         'title' => 'required|min:5|max:100',
        //         'description' => 'required|max:1000',
        //         'thumb' => 'required|max:255',
        //         'price' => 'required|max:20',
        //         'series' => 'required|max:20',
        //         'sale_date' => 'required',
        //         'type' => 'required|max:50',
        //     ],
        //     [
        //         'title.required' => 'Il campo del titolo è richiesto',
        //         'title.min' => 'Il campo del titolo deve essere almeno di 5 caratteri',
        //         'title.max' => 'Il campo del titolo deve essere al massimo di 100 caratteri',
        //         'description.required' => 'Il campo della descrizione è richiesto',
        //         'thumb.required' => 'Il link all\'immagine è richiesto',
        //         'price.required' => 'Il campo del prezzo è richiesto',
        //         'series.required' => 'Il nome della serie è richiesto',
        //         'sale_date.required' => 'La data di pubblicazione è richiesta',
        //         'type.required' => 'La tipologia di comic è richiesta',

        //     ]
        // )->validate();

        // return $validator;
    }
}
