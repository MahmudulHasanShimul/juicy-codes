@extends('backend.master')
@section('admin-title')
    Dashboard | Edit Project
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    @if (Session::get('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('msg') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h4 class="text-center pt-5 text-success btn-cus">Edit The Project</h4>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('project.update')}}" method="POST" enctype="multipart/form-data"
                                class="row g-lg-3 gy-3">
                                @csrf
                                <input type="hidden"  name="id" value="{{$project->id}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Project Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$project->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Project URL</label>
                                    <input type="text" class="form-control" name="project_url" value="{{$project->project_url}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Git Hub</label>
                                    <input type="text" class="form-control" name="git_hub" value="{{$project->git_hub}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Project Description</label>
                                    <textarea name="description" cols="30" rows="4" class="form-control">{{$project->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Project Image</label>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                    <img src="{{asset('/')}}{{$project->image}}" alt="" height="50px" width="50px">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success w-100">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
