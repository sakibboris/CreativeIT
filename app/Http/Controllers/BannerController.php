<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
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
        $banners = Banner::all();
        return view('backend.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        $request->validate([
            'banner_name' => 'required|max:30',
            'banner_img' => 'required|max:5047|mimes:png,jpg,jpeg,svg,webp'
        ]);
        $banner_img = $request->banner_img;
        $extension = $banner_img->getClientOriginalExtension();
        $new_banner_name = 'Banner_' . uniqid() . '.' . $extension;
        $path = public_path('storage/img');
        if (!File::exists($path)) {
            mkdir($path);
        }
        $banner_img->move($path, $new_banner_name);
        $banner->banner_name = $request->banner_name;
        $banner->banner_img = $new_banner_name;
        $banner->save();
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
        $banners = Banner::find($id);
        return view('backend.banner.edit', compact('banners'));
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
        if ($request->banner_img) {
            $banner_img = $request->banner_img;
            $extension = $banner_img->getClientOriginalExtension();
            $new_banner_name = 'Banner_' . uniqid() . '.' . $extension;
            $path = public_path() . '/storage/img';
            if (!File::exists($path)) {
                mkdir($path);
            }
            $banner_img->move($path, $new_banner_name);

            $banner = Banner::find($id);
            $oldPath = public_path() . '/storage/img/' . $banner->banner_img;
            if (File::exists($oldPath)) {
                unlink($oldPath);
            }
            $banner->banner_name = $request->banner_name;
            $banner->banner_img = $new_banner_name;
            $banner->save();
            return back()->with('success', 'Updated Successfully');
        } else {
            $banner = Banner::find($id);
            $banner->banner_name = $request->banner_name;
            $banner->save();
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
        $banner = Banner::find($id);
        $banner->delete();
        return back()->with('success', 'Banner Trashed Successfuly');
    }
    // Status Process

    public function status(Request $request, $id)
    {
        $banner = Banner::find($id);
        if ($banner->status == 0) {
            $banner->status = 1;
        } else {
            $banner->status = 0;
        }
        $banner->save();
        return back()->with('success', 'Status Updated Successfuly');
    }


    public function trashIndex()
    {
        $banners = Banner::onlyTrashed()->get();
        return view('backend.banner.trashIndex', compact('banners'));
    }


    public function restore($id)
    {
        $banner = Banner::onlyTrashed()->find($id);
        $banner->restore();
        return back()->with('success', 'Banner Restored Successfuly');
    }


    public function permenantDelete($id)
    {
        $banner = Banner::onlyTrashed()->find($id);
        $path = public_path() . '/storage/img/' . $banner->banner_img;
        if (File::exists($path)) {
            unlink($path);
        }
        $banner->forceDelete();
        return back()->with('success', 'Banner Deleted Successfuly');
    }
}
