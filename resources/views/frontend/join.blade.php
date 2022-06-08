@extends('layouts.frontendapp')
@section('title', 'Join Seminar')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="card">
                    <div class="card-header">
                        <h5 class="modal-title">Join Our Free Seminars</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('leed.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" name="name" value="" class="form-control"
                                        placeholder="Enter Your Name*">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" name="email" value="" class="form-control"
                                        placeholder="Enter Your Email*">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="number" name="phone" value="" class="form-control"
                                        placeholder="Enter Your phone*">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <select class="form-control" name="seminar_id" id="seminar_id">
                                        <option selected disabled>Select Topic</option>
                                        @foreach ($seminars as $seminar)
                                            <option value="{{ $seminar->id }}">{{ $seminar->topic }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea name="address" class="form-control" placeholder="Enter your address"></textarea>
                                </div>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger btn_submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
