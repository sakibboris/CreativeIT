@extends('layouts.backendapp')
@section('title', 'All Banner')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-uppercase">
        <h1 class="h3 mb-0 text-gray-800">All Banner</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Banner</li>
        </ol>
    </div>
    <div class="row">
        @forelse ($banners as $banner)
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="card-header text-center bg-secondary">
                        <span class="badge bg-{{ $banner->status == 0 ? 'success' : 'danger' }}">
                            {{ $banner->status == 0 ? 'Active' : 'Deactive' }}
                        </span>
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/img/' . $banner->banner_img) }}" alt="{{ $banner->banner_name }}"
                            style="height: 150px; width:100%;">
                        <br>
                        <hr class="bg-danger">
                        <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('banner.status', $banner->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-warning" name="status">STATUS</button>
                        </form>
                        <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" name="delete">DELETE</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <h1 class="text-uppercase mx-auto my-5">Nothing Posted now Post something</h1>
        @endforelse
    </div>
@endsection
