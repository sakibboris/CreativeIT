<?php

namespace App\Http\Controllers\frontend;

use App\Models\About;
use App\Models\Banner;
use App\Models\Gellery;
use App\Models\Seminar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::where('status', 0)->latest()->get();
        $seminars = Seminar::where('status', 0)->latest()->get();
        $courses = Course::where('status', 0)->get();
        $gelleries = Gellery::where('status', 0)->latest()->get();
        $abouts = About::where('status', 0)->latest()->first();
        return view('frontend.home', compact('banners', 'gelleries', 'abouts', 'seminars','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
