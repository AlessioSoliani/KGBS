<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:200',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:200',            
            'contact' => 'required|string|max:100',
            'categories' => 'nullable|string',            
            'image_url' => 'nullable|image' 
        ]);
    
        $event = Event::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'date' => $validatedData['date'],
            'location' => $validatedData['location'],
            'contact' => $validatedData['contact'],
            'categories' => $validatedData['categories'] ?? null, // Se non è presente, imposta null
           
        ]);
        //controllo che la richiesta ha un file chiamato image_url
        if($request->hasFile('image_url')){
            $event->image_url = $request->file('image_url')->storeAs('public/events/'.$event->id,'cover.jpg');
            $event->save();
        }

        return redirect()->back()->with(['success'=>'Evento creato con successo']);
        }        
    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
