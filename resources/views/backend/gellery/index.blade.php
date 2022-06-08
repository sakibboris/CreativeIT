@extends('layouts.backendapp')
@section('title', 'All Gellery')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-uppercase">
        <h1 class="h3 mb-0 text-gray-800">All Gellery</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Gellery</li>
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
                        <a href="{{ route('gellery.edit', $gellery->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('gellery.status', $gellery->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-warning" name="status">STATUS</button>
                        </form>
                        <form action="{{ route('gellery.destroy', $gellery->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" name="destroy">DESTROY</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <h1 class="">Nothing Posted now Post something</h1>
        @endforelse
    </div>
    <div class="m-3 d-flex justify-content-center">
        <span>{{ $gelleries->links() }}</span>
    </div>
@endsection
