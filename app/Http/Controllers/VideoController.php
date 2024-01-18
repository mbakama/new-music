<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function List()
    {
        $videos = Video::with('user')->paginate(10);
        
        return view('video', compact('videos')); 
    }
}
