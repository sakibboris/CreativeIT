@extends('layouts.backendapp')
@section('title', 'Add About')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add About</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add About</li>
        </ol>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Add About page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <label for="inputName">About Name:</label>
                    <input type="text" class="form-control" name="about_name" id="inputName"
                        placeholder="Input About Name here" value="{{ old('about_name') }}">
                    @error('about_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputPicture">About Picture:</label>
                    <input type="file" class="form-control" name="about_picture" id="inputPicture"
                        value="{{ old('about_picture') }}">
                    @error('about_picture')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#">About Details:</label>
                    <textarea id="summernote" name="about_details">{{ old('about_details') }}</textarea>
                    @error('about_details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Add About</button>
            </form>
        </div>
    </div>
@endsection
@section('custom_script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
