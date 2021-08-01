@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-5">
        <!-- Heading -->
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h6 class="mb-0">
                            Collection / Group
                            <a href="{{ url('group-delete-records') }}" class="btn btn-primary py-2 text-white float-right ml-2">Deleted Records</a>
                            <a href="{{ url('group-add') }}" class="btn btn-primary py-2 text-white float-right">ADD GROUPS</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- Heading -->

        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Show/Hide</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($group as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->descrip }}</td>
                                        <td>
                                            <input type="checkbox" {{ $item->status == '1' ? 'checked' : ' ' }}>
                                        </td>
                                        <td>
                                            <a href="{{ url('group-edit/' . $item->id) }}" class="badge btn-primary">Edit</a>
                                            <a href="{{ url('group-delete/' . $item->id) }}" class="badge btn-danger">Delete</a>
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

@endsection
