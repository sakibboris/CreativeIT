@extends('layouts.backendapp')
@section('title', 'Add Gellery')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Gellery</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Gellery</li>
        </ol>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Add Gellery page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('gellery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <label for="inputName">Gellery Name:</label>
                    <input type="text" class="form-control" name="gellery_name" id="inputName"
                        placeholder="Input Gellery Name here" value="{{ old('gellery_name') }}">
                    @error('gellery_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputPicture">Gellery Picture:</label>
                    <input type="file" class="form-control" name="gellery_img" id="inputPicture"
                        value="{{ old('gellery_img') }}">
                    @error('gellery_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Add Gellery</button>
            </form>
        </div>
    </div>
@endsection
