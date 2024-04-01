<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($id)
    {
        // retrieve news item from the database using the $id
        // For now, we'll just return a view
        return view('news.show', ['id' => $id]);
    }
}
