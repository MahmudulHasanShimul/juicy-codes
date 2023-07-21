@extends('backend.master')
@section('admin-title')
    Dashboard
@endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-md-10 mx-auto">
                @if (Session::get('msg'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('msg') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Client Messages</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Client Email</th>
                                    <th scope="col">Email Subject</th>
                                    <th scope="col">Client Message</th>
                                    <th scope="col" class="ps-5">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$client->name}}</td>
                                            <td>{{$client->email}}</td>
                                            <td>{{$client->subject}}</td>
                                            <td class="w-50">{{$client->message}}</td>
                                            <td class="text-center">
                                                <a href="{{route('client.message',['id'=>$client->id])}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
