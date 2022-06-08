@extends('layouts.backendapp')
@section('title', 'Add Course')
@section('cus_style')
    <style>
        form .label {
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 700;
        }

    </style>
@endsection
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Course</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Course</li>
        </ol>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Add Course page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <label for="inputName">Course Title:</label>
                    <input type="text" class="form-control" name="title" id="inputName"
                        placeholder="Input Course Name here" value="{{ old('title') }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Course Big Picture</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="big_img" id="inputBig_img"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputBig_img">Choose Big Picture</label>
                        </div>
                    </div>
                    @error('big_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Course Small Picture</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="small_img" id="inputSmall_img"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputSmall_img">Choose Small Picture</label>
                        </div>
                    </div>
                    @error('small_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#summernote1" class="label">Overview:</label>
                    <textarea id="summernote1" class="summerNote" name="overview">{{ old('overview') }}</textarea>
                    @error('overview')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#summernote2" class="label">Course Module:</label>
                    <textarea id="summernote2" class="summerNote" name="module">{{ old('module') }}</textarea>
                    @error('module')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#summernote3" class="label">Software Taught:</label>
                    <textarea id="summernote3" class="summerNote" name="software">{{ old('software') }}</textarea>
                    @error('software')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#summernote4" class="label">Marketplace:</label>
                    <textarea id="summernote4" class="summerNote" name="marketplace">{{ old('marketplace') }}</textarea>
                    @error('marketplace')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#summernote5" class="label">Duration:</label>
                    <textarea id="summernote5" class="summerNote" name="duration">{{ old('duration') }}</textarea>
                    @error('duration')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#summernote6" class="label">Prerequisites:</label>
                    <textarea id="summernote6" class="summerNote" name="prerequirments">{{ old('prerequirments') }}</textarea>
                    @error('prerequirments')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="#summernote7" class="label">Career Opportunity:</label>
                    <textarea id="summernote7" class="summerNote" name="carrear">{{ old('carrear') }}</textarea>
                    @error('carrear')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Add Course</button>
            </form>
        </div>
    </div>
@endsection
@section('custom_script')
    <script>
        $(document).ready(function() {
            $('.summerNote').summernote({
                tabsize: 4,
                height: 200,
                placeholder: 'Input something'
            });
        });
    </script>
@endsection
