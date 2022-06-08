@extends('layouts.backendapp')
@section('title', 'All Header Info')
@section('content')
    <div class="row">
        @foreach ($headers as$key => $header)
            <div class="col-sm-6">
                <div class="card text-white bg-secondary mb-3 text-center">
                    <div class="card-header text-center">
                        <span class="badge badge-pill badge-warning">Header {{ ++$key }}</span>
                        <span class="badge bg-{{ $header->status == 1 ? 'primary' : 'danger' }}">
                            {{ $header->status == 1 ? 'Active' : 'Deactive' }}
                        </span>
                        <div class="actions">
                            <hr class="bg-danger">
                        <a href="{{ route('header.edit', $header->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('header.status', $header->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-warning" name="status">STATUS</button>
                        </form>
                        <form action="{{ route('header.destroy', $header->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" name="delete">DELETE</button>
                        </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><h3>{{ $header->notice_title }}</h3></h5>
                        <img src="{{ $header->logo }}" alt="logo">
                        <p class="card-text text-justify">{{ $header->notice }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
