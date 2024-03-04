<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models

use App\Models\Comic;
class ComicController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index' , compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            //$comicData = $request->all();
            //dd($comicData);

            $validatedData = $request->validate([
                'title'=> 'required|max:64',
                'description'=> 'required|max:1024',
                'thumb'=>'nullable|max:1024',
                'price'=>'required|numeric|max:20',
                'series'=>'required|max:64',
                'sale_date'=>'required|date',
                'type'=>'required|max:64',
                'artists'=>'required|max:1000',
                'writers'=>'nullable|max:1000',
            ]);
            //dd($validatedData);

            //$validatedData = $request->all();
            //dd($comicData);

            $comic = Comic::create($validatedData);


            // $comic = new Comic();
            // $comic->title = $comicData['title'];
            // $comic->description = $comicData['description'];
            // $comic->thumb = $comicData['thumb'];
            
            // $comic->price = floatval($comicData['price']);

            // $comic->series = $comicData['series'];
            // $comic->sale_date = $comicData['sale_date'];
            // $comic->type = $comicData['type'];
            // //dd($comicData);

    
            // $comic->artists =$comicData['artists'];

            // $comic->writers =$comicData['writers'];

            // $comic->save();
        
            return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //dd($comic);

        

        return view('comics.edit' , compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //dd($request);

            
            //$comicData = $request->all();

            $validatedData = $request->validate([
                'title'=> 'required|max:64',
                'description'=> 'required|max:1024',
                'thumb'=>'nullable|max:1024',
                'price'=>'required|numeric|max:20',
                'series'=>'required|max:64',
                'sale_date'=>'required|date',
                'type'=>'required|max:64',
                'artists'=>'required|max:1000',
                'writers'=>'nullable|max:1000',
            ]);
    
                $comic->update($validatedData);


            //$comic->update($comicData);

            // $comic->title = $comicData['title'];
            // $comic->description = $comicData['description'];
            // $comic->thumb = $comicData['thumb'];
            
            // $comic->price = floatval($comicData['price']);

            // $comic->series = $comicData['series'];
            // $comic->sale_date = $comicData['sale_date'];
            // $comic->type = $comicData['type'];

            // $explodeArtists= explode(',', $comicData['artists']);
            // $comic->artists = json_encode($explodeArtists);

            // $explodeWriters=explode (',', $comicData['writers']);
            // $comic->writers = json_encode($explodeWriters);

            // $comic->save();
            //dd($comicData);

            return view('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
