<?php

namespace tk\fatiha\Controllers;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
{
    $posts = [
        'title' => 'ta',
        // Add more key-value pairs if needed
    ];

    return view('tarek::post', compact('posts'));
}

}
