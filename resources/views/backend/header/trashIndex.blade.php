@extends('layouts.backendapp')
@section('title', 'All header')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-uppercase">
        <h1 class="h3 mb-0 text-gray-800">All header</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Banner</li>
        </ol>
    </div>
    <div class="row">
        @forelse ($headers as $header)
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="card-header text-center bg-secondary">
                        <span class="badge bg-{{ $header->status == 0 ? 'success' : 'danger' }}">
                            {{ $header->status == 0 ? 'Active' : 'Deactive' }}
                        </span>
                        <hr class="bg-danger">
                        <a href="{{ route('header.restore', $header->id ) }}" class="btn btn-success">RESTORE</a>
                        <form action="{{ route('header.delete', $header->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" name="delete">DELETE</button>
                        </form>
                    </div>
                    <div class="card-body text-center">
                            <h5 class="card-title"><h3>{{ $header->notice_title }}</h3></h5>
                            <img src="{{ $header->logo }}" alt="logo">
                            <p class="card-text text-justify">{{ $header->notice }}</p>
                        </div>
                </div>
            </div>
        @empty
            <h1 class="text-uppercase mx-auto my-5">Nothing Trashed</h1>
        @endforelse
    </div>
@endsection
