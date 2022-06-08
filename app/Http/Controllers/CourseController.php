<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Gellery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(1);
        return view('backend.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.course.create');
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
            'title' => 'required',
        ]);
        // image processing
        $course_img_s = $request->small_img;
        $extension = $course_img_s->getClientOriginalExtension();
        $new_img_s = 'Course_' . uniqid() . '.' . $extension;
        $path = public_path('/storage/img/courses/');
        if (!File::exists($path)) {
            mkdir($path);
        }
        $course_img_s->move($path, $new_img_s);
        // image processing
        $course_img_b = $request->big_img;
        $extension = $course_img_b->getClientOriginalExtension();
        $new_img_b = 'Course_' . uniqid() . '.' . $extension;
        $path = public_path('/storage/img/courses/');
        if (!File::exists($path)) {
            mkdir($path);
        }
        $course_img_b->move($path, $new_img_b);

        // input process

        $course = new Course();
        $course->title = $request->title;
        $course->big_img = $new_img_b;
        $course->small_img = $new_img_s;
        $course->overview = $request->overview;
        $course->module = $request->module;
        $course->software = $request->software;
        $course->marketplace = $request->marketplace;
        $course->duration = $request->duration;
        $course->prerequirments = $request->prerequirments;
        $course->carrear = $request->carrear;
        $course->save();
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
        $course = Course::find($id);
        return view('frontend.course_view', compact('course'));
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
        $course = Course::find($id);
        $course->delete();
        return back()->with('success', 'Course Deleted Succesfully--->>>');
    }
}
