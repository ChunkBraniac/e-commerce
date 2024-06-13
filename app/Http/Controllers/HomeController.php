<?php

namespace App\Http\Controllers;

use App\Models\AddItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        $items = AddItem::all();
        
        return view('home', compact('items'));
    }
}
