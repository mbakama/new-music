<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Categorie;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $post = Post::with('user','categorie')->get();
        // $user = $post->user;
        // $categorie = $post->categorie;

        
        return view("blog", compact('post'));

        // if(empty($posts))
        //     {
        //         return response()->json([
        //             "status" => "success",
        //             "data"=>$posts
        //         ], 200);
        //     } else {
        //         return response()->json([
        //             "status"=> "error",
        //             "data"=>"not fund"
        //         ], 404);
        //     }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $post = Post::create($request->all());

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        $user = $post->user;
        // $comment = $post->comments;

        
        dd($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
