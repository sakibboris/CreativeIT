<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seminars = Seminar::with('leeds')->select('id', 'topic')->latest()->get();
        return view('backend.seminar.index', compact('seminars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.seminar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required|unique:seminars,topic|max:50',
            'date' => 'required|after_or_equal:today',
            'time' => 'required'
        ]);
        $date = Carbon::parse($request->date)->format('d M Y, l');
        $time = Carbon::parse($request->time)->format('h:i,A');

        $seminars = new Seminar();
        $seminars->topic = $request->topic;
        $seminars->date = $date;
        $seminars->time = $time;
        $seminars->save();
        return back()->with('success', 'Stored Successfully');
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
        $seminar = Seminar::find($id);
        $seminar->delete();
        return back()->with('success', 'Deleted Successfuly');
    }

    public function status(Request $request, $id)
    {
        $seminar = Seminar::find($id);
        if ($seminar->status == 0) {
            $seminar->status = 1;
        } else {
            $seminar->status = 0;
        }
        $seminar->save();
        return back()->with('success', 'Status Updated Successfuly');
    }
    public function joinSeminar()
    {
        $seminars = Seminar::select('id', 'topic')->where('status', 0)->get();
        return view('frontend.join', compact('seminars'));
    }

    // Seminars information

    public function allSeminar()
    {
        $seminars = Seminar::all();
        return view('backend.seminar.all_seminars', compact('seminars'));
    }
}
