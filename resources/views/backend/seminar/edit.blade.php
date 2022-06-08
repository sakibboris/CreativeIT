@extends('layouts.backendapp')
@section('title', 'Update Seminar')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Seminar</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Seminar</li>
        </ol>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Update Seminar page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('seminar.update', $seminar->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="my-3">
                    <label for="inputName">Seminar Name:</label>
                    <input type="text" class="form-control" name="topic" id="inputName"
                        placeholder="Input Seminar Name here" value="{{ $seminar->topic }}">
                    @error('topic')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputDate">Seminar Date:</label>
                    <input type="date" class="form-control" name="date" id="inputDate"
                        placeholder="Input Seminar Date here" value="{{ $seminar->date }}">
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputTime">Seminar Time:</label>
                    <input type="time" class="form-control" name="time" id="inputTime"
                        placeholder="Input Seminar Time here" value="{{ $seminar->time }}">
                    @error('time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Update Seminar</button>
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
