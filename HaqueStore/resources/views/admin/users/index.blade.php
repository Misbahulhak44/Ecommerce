@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->


            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
                    <span>/</span>
                    <span>Registered Users</span>
                </h4>
            </div>

        </div>
        <!-- Heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable1" class="table table-ordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>isBan/UnBan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role_as }}</td>



                                        <td class="text-center">
                                            @if ($item->isBan == '0')
                                                <label class="px-3 py-2 badge badge-pill btn-primary">Not Banned</label>
                                            @elseif($item->isBan=='1')
                                                <label class="px-3 py-2 badge badge-pill btn-danger"> Banned</label>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('role-edit/' . $item->id) }}"
                                                class="badge badge-pill btn-primary px-3 py-2">EDIT</a>
                                            <a href="" class="badge badge-pill btn-danger px-3 py-2">DELETE</a>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                        {{--
                            <div class="float-right">
                            {{ $users->links() }}<!--to make multiple  page using laravel  -->
                        </div>  --}}





                    </div>
                </div>
            </div>
        </div>



    @endsection
    <!--this is for datatable pagination code.....this code is taken from datatables.net plugin website-->
    @section('scripts')
        <script>
            $(document).ready(function() {
                $('#datatable1').DataTable();
            });

        </script>
    @endsection
