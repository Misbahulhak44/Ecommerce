@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-5">
        <!-- Heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h6 class="mb-0">
                            Collection / Group Deleted Records

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
                                            <a href="{{ url('group-re-store/' . $item->id) }}" class="badge py-2 px-2 btn-danger">Re-Store</a>
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
