<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist ; // permet de lier le model Artist au controller ArtistsController

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::orderBy('created_at', 'desc')->paginate(15);
        return view('artists.index')->with('artists', $artists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'biography' => 'required',
            'genre' => 'required',
            'soundcloud' => 'required',
            'youtube' => 'required',
        ]);
        
        // Create artist profil
        $artist = new Artist;
        $artist->name = $request->input('name');
        $artist->biography = $request->input('biography');
        $artist->genre = $request->input('genre');
        $artist->soundcloud = $request->input('soundcloud');
        $artist->youtube = $request->input('youtube');
        $artist->user_id = auth()->user()->id;
        $artist->save();

        return redirect('/artists')->with('success', 'Votre profil a bien été crée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::find($id);
        return view('artists.show')->with('artist', $artist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::find($id);
        return view('artists.edit')->with('artist', $artist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'biography' => 'required',
            'genre' => 'required',
            'soundcloud' => 'required',
            'youtube' => 'required',
        ]);
        
        // Create artist profil
        $artist = Artist::find($id);
        $artist->name = $request->input('name');
        $artist->biography = $request->input('biography');
        $artist->genre = $request->input('genre');
        $artist->soundcloud = $request->input('soundcloud');
        $artist->youtube = $request->input('youtube');
        $artist->save();

        return redirect('/artists')->with('success', 'Votre profil a bien été mis à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = Artist::find($id);
        $artist->delete();
        return redirect('/artists')->with('success', 'Votre profil a bien été supprimé !');
    }
}
