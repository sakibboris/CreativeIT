@extends('layouts.frontendapp')
@section('title', 'single')
@section('content')
    <!--============== breadcumb Part Goes Here ================-->
    <section id="breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb text-center">
                        <h2>Course Details</h2>
                        <h6><a href="{{ route('frontend.home') }}">Home</a> <i
                                class="fa fa-chevron-right"></i>{{ $course->title }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============== Course Details Part Goes Here ================-->
    <section id="course-details" class="pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head pb-lg-2">
                        <h2>{{ $course->title }}</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <img src="/storage/img/courses/{{ $course->big_img }}"
                        class="img-fluid w-100" alt="{{ $course->title }}">
                </div>
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
    </section>
@endsection
