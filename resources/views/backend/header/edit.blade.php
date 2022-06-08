@extends('layouts.backendapp')
@section('title', 'Edit Header Info')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Header Info</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Header Info</li>
        </ol>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Edit Header Info page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('header.update', $header->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="my-3">
                    <label for="inputName">Notice Title:</label>
                    <input type="text" class="form-control" name="notice_title" id="inputName"
                        placeholder="Input Notice Title here" value="{{ $header->notice_title }}">
                    @error('notice_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#">Notice:</label>
                    <textarea id="summernote" class="form-control" placeholder="Input Notice here" name="notice">{{ $header->notice }}</textarea>
                    @error('notice')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputPicture">Logo:</label>
                    <input type="text" class="form-control" placeholder="Input Logo Link here" name="logo" id="inputPicture" value="{{ $header->logo }}">
                    @error('logo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Edit Header</button>
            </form>
        </div>
    </div>
@endsection
