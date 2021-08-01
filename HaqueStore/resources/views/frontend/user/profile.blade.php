@extends('layouts.frontend')
@section('title')
    My Profile
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>My profile</h4>
                            <hr>

                                <form action="{{ url('my-profile-update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                               <input type="text" name="fname" class="form-control" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                               <input type="text" name="lname" class="form-control" value="{{ Auth::user()->lastname }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Email Id</label>
                                               <input type="text" class="form-control" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Phone Number</label>
                                               <input type="text" name="phone_no" class="form-control" value="{{ Auth::user()->phone_no }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Alternate Phone Number</label>
                                               <input type="text" name="alt_phone_no" class="form-control" value="{{ Auth::user()->alt_phone_no }}">
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Address1(Flat No,Villege)</label>
                                               <input type="text" name="address1" class="form-control" value="{{ Auth::user()->address1 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Address2(Landmark near by)</label>
                                               <input type="text" name="address2" class="form-control" value="{{ Auth::user()->address2 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">City</label>
                                               <input type="text" name="city" class="form-control" value="{{ Auth::user()->city }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">District</label>
                                               <input type="text" name="district" class="form-control" value="{{ Auth::user()->district }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">State</label>
                                               <input type="text" name="state" class="form-control" value="{{ Auth::user()->state }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Country</label>
                                               <input type="text" name="country" class="form-control" value="{{ Auth::user()->country }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Pin code/Zip code</label>
                                               <input type="text" name="pincode" class="form-control" value="{{ Auth::user()->pincode }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">

                                               <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>





                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection
