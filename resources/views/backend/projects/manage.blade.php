@extends('backend.master')
@section('admin-title')
    Dashboard | Manage Project
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 mx-auto">
                    @if (Session::get('msg'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('msg') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (Session::get('noti'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('noti') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Your Project</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">SN</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">URL</th>
                                        <th scope="col">Git Hub</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col" class="ps-5">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($projects as $project)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $project->title }}</td>
                                            <td>{{ $project->project_url }}</td>
                                            <td>{{ $project->git_hub }}</td>
                                            <td>{{ $project->description }}</td>

                                            <td>
                                                <img src="{{ asset('/') }}{{ $project->image }}" alt=""
                                                    height="50px" width="50px">
                                            </td>
                                            <td class="text-center" style="width: 150px">
                                                <a href="{{route('project.edit', $project->id)}}" class="btn btn-success">Edit</a>
                                                <a href="{{ route('project.delete', $project->id) }}" class="btn btn-danger">Delete</a>
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
    </section>
@endsection
