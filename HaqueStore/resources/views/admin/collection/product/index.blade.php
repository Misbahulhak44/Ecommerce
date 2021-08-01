@extends('layouts.admin')

@section('content')


        <!-- Heading -->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h6 class="mb-0">
                            Collection / Products
                            <a href="{{ url('')}}" class="badge bg-primary p-2 text-white float-right ml-2">Deleted Records</a>

                            <a href="{{ url('add-products') }}" class="badge bg-primary p-2 text-white float-right ml-2">Add Product</a>
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
                        @if(session('status'))

                   <h6> {{ session('status') }}</h6>
                @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Sub Category Name</th>
                                <th>Image</th>
                                <th>Show/Hide</th>
                                <th>Action</th>
                            </thead>
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->subcategory->name }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/products/'.$item->image) }}" width="60px" alt="Product image">
                                    </td>
                                    <td>
                                        <input type="checkbox"{{ $item->status =='1' ? 'checked' :'' }}>
                                    </td>
                                    <td>
                                        <a href="{{ url('edit-products/'.$item->id) }}" class="badge btn btn-info">Edit</a>
                                        <a href="" class="badge btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tbody>
                                @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->category->name}}</td>
                                        <td>
                                            <img src="{{ asset('uploads/subcategory/'.$item->image) }}" width="50px"/>
                                        </td>
                                        <td>
                                            <input type="checkbox" {{ $item->status == '1' ? 'checked' : ' ' }}>
                                        </td>
                                        <td>
                                            <a href="{{ url('subcategory-edit/' . $item->id) }}" class="badge btn-primary">Edit</a>
                                            <a href="{{ url('subcategory-delete/' . $item->id) }}" class="badge btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody> --}}

                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @endsection
