@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6>Collections / Groups Edit</h6>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ url('group-update/'.$group->id) }}" method="POST" >
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{ $group->name }}" class="form-control" placeholder="Enter Group Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Custom URL (Slug)</label>
                                    <input type="text" name="url" value="{{ $group->url }}" class="form-control" placeholder="Enter URL ">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea rows="4" name="descrip" class="form-control" placeholder="Enter Description">{{ $group->descrip }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Show/Hide</label>
                                    <input type="checkbox" name="status" class="" {{ $group->status == '1' ? 'checked' : ' ' }} placeholder="Enter Description"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">

                                    <button type="submit" class="btn btn-info" >Update</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
