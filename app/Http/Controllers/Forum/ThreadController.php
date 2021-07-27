<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index()
    {
        return view('threads.index');
    }

    public function show()
    {
        return view('threads.show');
    }
}
