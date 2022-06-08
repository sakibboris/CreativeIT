@extends('layouts.backendapp')
@section('title', 'All Gellery')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Contacts</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Contacts</li>
        </ol>
    </div>
    <div class="row">
        <div class="mb-3 col-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered border-danger bg-primary text-dark">
                        <h4 class="text-center mb-3 text-uppercase">All Contact Informations</h4>
                        <tr class="text-uppercase text-center bg-warning">
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Message</th>
                            <th>Acion</th>
                        </tr>
                        @foreach ($contacts as $key => $contact)
                            <tr class="text-light">
                                <td>{{ ++$key }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->address }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-sm btn-danger" name="destroy">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="m-3 d-flex justify-content-center">
                        <span>{{ $contacts->links() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
