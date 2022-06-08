@extends('layouts.frontendapp')
@section('title', 'Home')
@section('content')
    {{-- Banner section start here --}}
    <section id="banner">
        <div class="slider-main">
            @forelse ($banners as $banner)
                <div class="slider-item">
                    <img src="{{ asset('storage/img/' . $banner->banner_img) }}" alt="banner1"
                        style="height: 450px !important; width: 100%; ">
                </div>
            @empty
                <h1 class="text-uppercase text-center bg-warning">No Banner Uploded Yet</h1>
            @endforelse
        </div>
    </section>
    {{-- Banner section end here --}}
    {{-- About section start here --}}
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-2">
                    <h2>{{ $abouts->about_name }}</h2>
                    {!! $abouts->about_details !!}
                </div>
                <div class="col-lg-5 pl-lg-0 order-lg-1">
                    <div class="about-img">
                        <img src="{{ asset('storage/img/' . $abouts->about_picture) }}" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
    </section>
    {{-- About section end here --}}

    {{-- Seminar section start here --}}
    <section id="seminar" class="mt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="card border-0">
                        <div class="card-header text-center">
                            Upcoming Seminar Schedule
                        </div>
                        <div class="card-body text-center">
                            <div class="table-responsive seminar-table seminar-modal">
                                <table class="table table-striped mt-3 table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Topic</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($seminars as $seminar)
                                            <tr>
                                                <td>{{ $seminar->topic }}</td>
                                                <td>{{ $seminar->date }}</td>
                                                <td>{{ $seminar->time }}</td>
                                                <td>
                                                    <a href="{{ route('seminar.join') }}"
                                                        class="btn-sm btn-secondary">Join</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">
                                                    <h3 class="text-uppercase">No Upcoming events available now</h3>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Seminar section end here --}}

    {{-- Courses Details section end here --}}
    <section id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-sm-0">
                    <div class="courses-head">
                        <h2>Our Courses</h2>
                        <p>Explore the weapons of Latest Information Technology!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($courses as $course)
                    <div class="col-lg-6 pl-md-0">
                        <div class="row course-item mx-md-0">
                            <div class="col-lg-7 col-md-9 col-sm-7 px-md-0">
                                <div class="gd-left">
                                    <h3>{{ $course->title }}</h3>
                                    {!! $course->overview !!}
                                </div>
                                <a href="{{ route('course.show', $course->id) }}">
                                    <div class="seat">
                                        <p>Read More </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-5 col-md-3 col-sm-5 pr-0">
                                <div class="gd-right">
                                    <img src="storage/img/courses/{{ $course->small_img }}" alt="{{ $course->title }}" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="text-uppercase text-center bg-warning">No Banner Uploded Yet</h1>
                @endforelse
            </div>
        </div>
    </section>
    {{-- Course Details section start here --}}


    {{-- Gelllery section start here --}}
    <section id="gallery" class="py-lg-5">
        <div class="container px-sm-0">
            <div class="row">
                <div class="col-lg-12 pt-sm-3 pt-md-0">
                    <div class="courses-head">
                        <h2>Our Gallery</h2>
                        <p>Explore the weapons of Latest Information Technology!</p>
                    </div>
                </div>
            </div>
            <div class="row px-lg-0">
                @forelse ($gelleries as $gellery)
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="gal-img">
                            <a href="{{ asset('storage/img/' . $gellery->gellery_img) }}" data-lightbox="roadtrip">
                                <img src="{{ asset('storage/img/' . $gellery->gellery_img) }}"
                                    alt="{{ $gellery->gellery_name }}" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>
                @empty
                    <h1 class="text-uppercase text-center bg-warning">Nothing is posted here request something from backend
                    </h1>
                @endforelse
            </div>
        </div>
    </section>
    {{-- Gelllery section end here --}}

    {{-- Contact section start here --}}
    <section id="form" class="p-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-md-0">
                    <div class="courses-head">
                        <h2>Contact Us</h2>
                        <p>Please fillup the form and submit your query.</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('contact.store') }}" method="POST" id="contact_form">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 pl-lg-0">
                        <div class="form-group pt-lg-2">
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group pt-lg-2">
                            <input type="text" name="email" class="form-control" placeholder="Enter Your Email Address"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6 pl-lg-0">
                        <div class="form-group pt-lg-2">
                            <input type="text" name="phone" class="form-control" placeholder="Enter Your Mobile Number"
                                value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group pt-lg-2">
                            <input type="text" name="address" class="form-control" placeholder="Enter Your Address"
                                value="{{ old('address') }}">
                        </div>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12 pl-lg-0">
                        <div class="form-group pt-lg-2">
                            <textarea class="form-control pb-5" name="message" placeholder="Message">{{ old('message') }}</textarea>
                        </div>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group text-center pt-lg-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- Contact section end here --}}
@endsection
