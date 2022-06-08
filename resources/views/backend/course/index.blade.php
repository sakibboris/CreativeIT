@extends('layouts.backendapp')
@section('title', 'Course Lists')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h5 mb-0 text-gray-800">Course Lists</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Course Lists</li>
        </ol>
    </div>
    <div class="row">
        @forelse ($courses as $course)
            <div class="card">
                <div class="card-header">
                    {!! $course->title !!}
                    <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" name="destroy">DESTROY</button>
                    </form>
                </div>
                <div class="card-body">
                    <img src="/storage/img/courses/{{ $course->big_img }}" alt="{!! $course->title !!}"
                        style="width:100%">
                    <div class="row">
                        <div class="col-lg-12 pt-lg-3">
                            <div class="content-desp">
                                <div class="head">
                                    <h2>Overview</h2>
                                </div>
                                <div class="overview-details">
                                    {!! $course->overview !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content-desp border-0">
                                <div class="head">
                                    <h2>Course Module</h2>
                                </div>
                                <div class="overview-details">
                                    <div class="apply-item">
                                        {!! $course->module !!}
                                    </div>
                                </div>
                            </div>
                            <div class="content-desp border-0">
                                <div class="head">
                                    <h2>Marketplace</h2>
                                </div>
                                <div class="overview-details">
                                    <div class="apply-item">
                                        {!! $course->marketplace !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content-desp border-0">
                                <div class="head">
                                    <h2>Software Taught</h2>
                                </div>
                                <div class="overview-details">
                                    <div class="apply-item">
                                        {!! $course->software !!}
                                    </div>
                                </div>
                            </div>
                            <div class="content-desp border-0">
                                <div class="head">
                                    <h2>Duration</h2>
                                </div>
                                <div class="overview-details">
                                    <div class="apply-item">
                                        {!! $course->duration !!}
                                    </div>
                                </div>
                            </div>
                            <div class="content-desp border-0">
                                <div class="head">
                                    <h2>Prerequisites</h2>
                                </div>
                                <div class="overview-details">
                                    <div class="apply-item">
                                        {!! $course->prerequirments !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="content-desp border-0">
                                <div class="head">
                                    <h2>Career Opportunity</h2>
                                </div>
                                <div class="overview-details">
                                    <div class="apply-item">
                                        {!! $course->carrear !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h4>Nothing is posted</h4>
        @endforelse
    </div>
    <div class="m-3">
        {{ $courses->links() }}
    </div>
@endsection
