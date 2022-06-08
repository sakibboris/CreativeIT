@extends('layouts.backendapp')
@section('title', 'Add gellery')
@section('content')
    {{-- {{ dd($gellery) }} --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add gellery</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add gellery</li>
        </ol>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Add gellery page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('gellery.update', $gellery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="my-3">
                    <label for="inputName">gellery Name:</label>
                    <input type="text" class="form-control" name="gellery_name" id="inputName"
                        placeholder="Input gellery Name here" value="{{ $gellery->gellery_name }}">
                    @error('gellery_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputPicture">gellery Picture:</label><br>
                    <img src="{{ asset('storage/img/' . $gellery->gellery_img) }}" alt="" style="height: 200px"
                        class="my-3 p-4 border border-warning">
                    <input type="file" class="form-control" name="gellery_img" id="inputPicture"
                        value="{{ old('gellery_img') }}">
                    @error('gellery_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Add gellery</button>
            </form>
        </div>
    </div>
@endsection
