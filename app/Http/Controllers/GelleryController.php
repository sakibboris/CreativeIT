<?php

namespace App\Http\Controllers;

use App\Models\Gellery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GelleryController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gelleries = Gellery::paginate(3);
        return view('backend.gellery.index', compact('gelleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gellery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // image processing
        $gellery_img = $request->gellery_img;
        $extension = $gellery_img->getClientOriginalExtension();
        $new_img = 'Gellery_' . uniqid() . '.' . $extension;
        $path = public_path('/storage/img');
        if (!File::exists($path)) {
            mkdir($path);
        }
        $gellery_img->move($path, $new_img);
        $gellery = new Gellery();
        $gellery->gellery_name = $request->gellery_name;
        $gellery->gellery_img = $new_img;
        $gellery->save();
        return back()->with('success', 'Gellery Uploaded Successfully');
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
        $gellery = Gellery::find($id, ['gellery_name', 'gellery_img'])->first();
        return view('backend.gellery.edit', compact('gellery'));
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
        if ($request->gellery_img) {
            $gellery_img = $request->gellery_img;
            $extension = $gellery_img->getClientOriginalExtension();
            $new_gellery_name = 'Gellery_' . uniqid() . '.' . $extension;
            $path = public_path() . '/storage/img';
            if (!File::exists($path)) {
                mkdir($path);
            }
            $gellery_img->move($path, $new_gellery_name);

            $gellery = Gellery::find($id);
            $oldPath = public_path() . '/storage/img/' . $gellery->gellery_img;
            if (File::exists($oldPath)) {
                unlink($oldPath);
            }
            $gellery->gellery_name = $request->gellery_name;
            $gellery->gellery_img = $new_gellery_name;
            $gellery->save();
            return back()->with('success', 'Updated Successfully');
        } else {
            $gellery = Gellery::find($id);
            $gellery->gellery_name = $request->gellery_name;
            $gellery->save();
            return back()->with('success', 'Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gellery = Gellery::find($id);
        $gellery->delete();
        return back()->with('success', 'Gellery Deleted Successfuly');
    }

    public function status(Request $request, $id)
    {
        $gellery = Gellery::find($id);
        if ($gellery->status == 0) {
            $gellery->status = 1;
        } else {
            $gellery->status = 0;
        }
        $gellery->save();
        return back()->with('success', 'Status Updated Successfuly');
    }

    public function trashed()
    {
        $gelleries = Gellery::onlyTrashed()->get();
        return view('backend.gellery.trashed', compact('gelleries'));
    }

    public function restore($id)
    {
        $gellery = Gellery::onlyTrashed()->find($id);
        $gellery->restore();
        return back()->with('success', 'Gellery Deleted Successfuly');
    }

    public function permanentDelete($id)
    {
        $gellery = Gellery::onlyTrashed()->find($id);
        $path = public_path() . '/storage/img/' . $gellery->gellery_img;
        if (File::exists($path)) {
            unlink($path);
        }
        $gellery->forceDelete();
        return back()->with('success', 'Gellery Deleted Successfuly');
    }
}
