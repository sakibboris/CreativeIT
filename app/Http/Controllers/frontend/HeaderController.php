<?php

namespace App\Http\Controllers\frontend;

use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::get();
        return view('backend.header.index', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.header.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $header = new Header();
        $request->validate([
            'notice_title' => 'required|max:30',
            'notice' => 'required|min:20',
            'logo' => 'required|min:30|max:2055'
        ]);

        $header->notice_title = $request->notice_title;
        $header->notice = $request->notice;
        $header->logo = $request->logo;
        $header->save();
        return back()->with('success', 'Uploaded Successfully');
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
        $header = Header::find($id);
        return view('backend.header.edit', compact('header'));
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
        $header = Header::find($id);
        $request->validate([
            'notice_title' => 'required|max:30',
            'notice' => 'required|min:20',
            'logo' => 'required|min:30|max:2055'
        ]);

        $header->notice_title = $request->notice_title;
        $header->notice = $request->notice;
        $header->logo = $request->logo;
        $header->save();
        return back()->with('success', 'Uploaded Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = Header::find($id);
        $header->delete();
        return back()->with('success', 'header Trashed Successfuly');
    }

    //  Status Process

    public function status(Request $request, $id)
    {
        $header = Header::find($id);
        if ($header->status == 0) {
            $header->status = 1;
        } else {
            $header->status = 0;
        }
        $header->save();
        return back()->with('success', 'Status Updated Successfuly');
    }

    public function trashIndex()
    {
        $headers = Header::onlyTrashed()->get();
        return view('backend.header.trashIndex', compact('headers'));
    }


    public function restore($id)
    {
        $header = Header::onlyTrashed()->find($id);
        $header->restore();
        return back()->with('success', 'header Restored Successfuly');
    }


    public function permenantDelete($id)
    {
        $header = Header::onlyTrashed()->find($id);
        $header->forceDelete();
        return back()->with('success', 'header Deleted Successfuly');
    }

}
