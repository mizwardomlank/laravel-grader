<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title'        => 'required|max:255',
        //     'slug'         => 'required|unique:problems|max:255',
        //     'content'      => 'required',
        //     'sample_input' => 'required',
        //     'sample_input' => 'required',
        // ]);

        dd($request->all());

        
    }
}
