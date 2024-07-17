<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home (){
        $events = Event::take(4)->get()->sortByDesc('created_at');
        
        return view ('welcome',compact('events'));
    }

    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }

    public function chiSiamo (){
        return view ('chiSiamo');
    }
    
}
