<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

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

        $menulinks = config('menulinks');
        $footerlinks = config('footerlinks');
        $socialicons = config('socialicons');
        $mainnavicons = config('mainnavicons');

        return view('comics/index', compact('comics', 'menulinks', 'footerlinks', 'socialicons', 'mainnavicons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menulinks = config('menulinks');
        $footerlinks = config('footerlinks');
        $socialicons = config('socialicons');
        $mainnavicons = config('mainnavicons');

        return view('comics/create', compact('menulinks', 'footerlinks', 'socialicons', 'mainnavicons'));
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
        $menulinks = config('menulinks');
        $footerlinks = config('footerlinks');
        $socialicons = config('socialicons');
        $mainnavicons = config('mainnavicons');

        return view('comics/show', compact('comic', 'menulinks', 'footerlinks', 'socialicons', 'mainnavicons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $menulinks = config('menulinks');
        $footerlinks = config('footerlinks');
        $socialicons = config('socialicons');
        $mainnavicons = config('mainnavicons');

        return view('comics/edit', compact('comic','menulinks', 'footerlinks', 'socialicons', 'mainnavicons'));
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
}
