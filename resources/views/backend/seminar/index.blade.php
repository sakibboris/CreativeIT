@extends('layouts.backendapp')
@section('title', 'Seminars')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-uppercase">
        <h1 class="h3 mb-0 text-gray-800">All Seminars</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Seminars & leeds</li>
        </ol>
    </div>
    <section id="seminar" class="mt-lg-5">
        <div class="container">
            <div class="card text-center">
                <div class="card-header text-uppercase bg-secondary text-warning">Seminars Schedules with leeds</div>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($seminars as $key => $seminar)
                                <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="v-pills-profile-tab"
                                    data-toggle="pill" href="#v-pills-{{ $key }}" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">{{ $seminar->topic }}</a>
                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content mt-4" id="nav-tabContent">
                        @foreach ($seminars as $index => $seminar)
                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}"
                                id="v-pills-{{ $index }}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($seminar->leeds as $leed)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $leed->name }}</td>
                                                <td>{{ $leed->email }}</td>
                                                <td>{{ $leed->phone }}</td>
                                                <td>{{ $leed->address }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom_script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
