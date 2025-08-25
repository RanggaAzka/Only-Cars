<?php

namespace App\Http\Controllers;

use App\Models\EventOnly;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $event = EventOnly::all();
         return view('/event', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          //  dd($request->all());
            $validatedata = $request->validate([
                "judul" => "required|string",
                "deskripsi" => "required|string",
                "location" => "required|string",
                "date" => "required|date",
                "gambar_event" => "image|mimes:jpg,jpeg,png"
        ]);

        if ($request->hasfile('gambar_event')) {
            $path = $request->file('gambar_event')->store('EventOnlyimages','public');
            $validatedata['gambar_event'] = $path;
        }

        EventOnly::create($validatedata);
        return redirect('event');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $event = EventOnly::findOrFail($id);
    return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = EventOnly::findOrFail($id);
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $event = EventOnly::findOrFail($id);  

          $validatedata = $request->validate([
            "judul" => "required|string",
            "deskripsi" => "required|string",
            "location" => "required|string",
            "date" => "required|date",
            "gambar_event" => "image|mimes:jpg,jpeg,png"
        ]);

        if ($request->hasfile('gambar_event')) {
            $path = $request->file('gambar_event')->store('EventOnlyimages','public');
            $validatedata['gambar_event'] = $path;
        }

        $event->update($validatedata);
        return redirect('event');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = EventOnly::findOrFail($id);
         $event->delete();
         return redirect('event');
    }
}
