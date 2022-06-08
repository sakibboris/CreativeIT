@extends('layouts.backendapp')
@section('title', 'All Gellery')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-uppercase">
        <h1 class="h3 mb-0 text-gray-800">All Trashed Gellery</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Trashed Gellery</li>
        </ol>
    </div>
    <div class="row">
        @forelse ($gelleries as $gellery)
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="card-header text-center bg-secondary">
                        <span class="badge bg-{{ $gellery->status == 0 ? 'success' : 'danger' }}">
                            {{ $gellery->status == 0 ? 'Active' : 'Deactive' }}
                        </span>
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/img/' . $gellery->gellery_img) }}"
                            alt="{{ $gellery->gellery_name }}" style="height: 150px">
                        <br>
                        <hr class="bg-danger">
                        <a href="{{ route('gellery.restore', $gellery->id) }}" class="btn btn-success">RESTORE</a>
                        <form action="{{ route('gellery.delete', $gellery->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" name="destroy">DESTROY</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <h1 class="mx-auto text-uppercase">Nothing trashed</h1>
        @endforelse
    </div>
@endsection
