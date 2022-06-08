@extends('layouts.backendapp')
@section('title', 'Add Banner')
@section('content')
    {{-- {{ dd($banners) }} --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Banner</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Banner</li>
        </ol>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Add Banner page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('banner.update', $banners->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="my-3">
                    <label for="inputName">Banner Name:</label>
                    <input type="text" class="form-control" name="banner_name" id="inputName"
                        placeholder="Input Banner Name here" value="{{ $banners->banner_name }}">
                    @error('banner_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputPicture">Banner Picture:</label><br>
                    <img src="{{ asset('storage/img/' . $banners->banner_img) }}" alt="" style="height: 200px"
                        class="my-3 p-4 border border-warning">
                    <input type="file" class="form-control" name="banner_img" id="inputPicture"
                        value="{{ $banners->banner_img }}">
                    @error('banner_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Add banner</button>
            </form>
        </div>
    </div>
@endsection
