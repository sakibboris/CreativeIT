@extends('layouts.backendapp')
@section('title', 'Seminars')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-uppercase">
        <h1 class="h3 mb-0 text-gray-800">All Seminars</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Seminars</li>
        </ol>
    </div>
    <section id="seminar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="card border-0">
                        <div class="card-header text-center">
                            Upcoming Seminar Schedule
                        </div>
                        <div class="card-body text-center">
                            <div class="table-responsive seminar-table seminar-modal">
                                <table class="table table-striped mt-3 table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Topic</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($seminars as $seminar)
                                            <tr>
                                                <td>{{ $seminar->topic }}</td>
                                                <td>{{ $seminar->date }}</td>
                                                <td>{{ $seminar->time }}</td>
                                                <td>
                                                    <form action="{{ route('seminar.destroy', $seminar->id) }}"
                                                        method="POST" class="d-inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            name="destroy">DESTROY</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-uppercase h3 text-danger">No upcoming seminars</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
