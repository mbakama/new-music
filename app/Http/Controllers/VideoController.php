<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function List()
    {
        $affs = Video::with('user')->paginate(10);
        
        return view('video', compact('affs'));
    }
}
