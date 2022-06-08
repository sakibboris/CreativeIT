@extends('layouts.backendapp')
@section('title', 'Add Header Info')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Header Info</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Header Info</li>
        </ol>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Add Header Info page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('header.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <label for="inputName">Notice Title:</label>
                    <input type="text" class="form-control" name="notice_title" id="inputName"
                        placeholder="Input Notice Title here" value="{{ old('notice_title') }}">
                    @error('notice_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#">Notice:</label>
                    <textarea id="summernote" class="form-control" name="notice">{{ old('notice') }}</textarea>
                    @error('notice')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputPicture">Logo:</label>
                    <input type="text" class="form-control" name="logo" id="inputPicture" value="{{ old('logo') }}">
                    @error('logo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Add Header</button>
            </form>
        </div>
    </div>
@endsection
