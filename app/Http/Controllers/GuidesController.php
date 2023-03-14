<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guides; 

class GuidesController extends Controller
{
    function getGuides()
    {
        $Guides_data=Guides::all();
        return view('UserGuides',['guides'=>$Guides_data]);
    }
    
}

