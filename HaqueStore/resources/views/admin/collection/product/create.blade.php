@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0">Collections/Add Products
                        <a href="{{ url('product') }}" class="badge bg-danger p-2 text-white float-right">Back</a>
                    </h6>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong>{{ session('status') }}
                        <button type="button" class="class" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @endif

                        <form action="{{ url('store-products' )}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="product-tab" data-toggle="tab" href="#product" role="tab">Product</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="descriptions-tab" data-toggle="tab" href="#descriptions" role="tab">Descriptions</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab">SEO</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab">Product Status</a>
                                </li>
                            </ul>

                            <div class="tab-content border p-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="product" role="tabpanel">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Product Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Product Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Select Sub-Category(eg:Brands)</label>
                                                <select name="sub_category_id" class="form-control" required>
                                                    <option value="">Select Sub-Category</option>
                                                    @foreach ($subcategory as $subcateitem)
                                                    <option value="{{ $subcateitem->id }}">{{ $subcateitem->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Custom URL(Slug)</label>
                                                <input type="text" name="url" placeholder="Custom URL" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Small Description</label>
                                                <textarea name="small_description" placeholder="small Description about product" class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="">Product Image</label>
                                                <input type="file" name="prod_image" placeholder="Product Image" class="form-control">
                                            </div>
                                        </div>
                                        <div col-md-3>
                                            <div class="form-group">
                                                <label for="">Sale Tage</label>
                                                <input type="number" name="sale_tag" placeholder="Sale Tag" class="form-control"/>
                                            </div>
                                        </div>
                                        <div col-md-3>
                                            <div class="form-group">
                                                <label for="">Original Price</label>
                                                <input type="number" name="original_price" placeholder="Original Price" class="form-control"/>
                                            </div>
                                        </div>
                                        <div col-md-3>
                                            <div class="form-group">
                                                <label for="">Offer Price</label>
                                                <input type="number" name="offer_price" placeholder="offer Price" class="form-control"/>
                                            </div>
                                        </div>
                                        <div col-md-3>
                                            <div class="form-group">
                                                <label for="">Quantity</label>
                                                <input type="number" name="quantity" placeholder="Quantity" class="form-control"/>
                                            </div>
                                        </div>
                                        <div col-md-3>
                                            <div class="form-group">
                                                <label for="">Priority</label>
                                                <input type="number" name="priority" placeholder="Priority" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="descriptions" role="tabpanel">
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">High Lights</label>
                                                <input type="text" name="p_highlight_heading" placeholder="High-Light Heading" class="form-control">
                                                <textarea name="p_highlights" placeholder="High-Light Description" rows="4" class="form-control mt-3"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Product Description</label>
                                                <input type="text" name="p_description_heading" placeholder="Product Description" class="form-control">
                                                <textarea name="p_description" placeholder="Product Description" rows="4" class="form-control mt-3"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Product Details/Specification</label>
                                                <input type="text" name="p_details_heading" placeholder="Product Details/Specification Heading" class="form-control">
                                                <textarea name="p_details" placeholder="Product Details/Specification" rows="4" class="form-control mt-3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="seo" role="tabpanel">
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta Title</label>
                                                <textarea name="meta_title" placeholder="Product Description" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta Description</label>
                                                <textarea name="meta_description" placeholder="Product Description" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta Keyword</label>
                                                <textarea name="meta_Keyword" placeholder="Product Details/Specification" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="status" role="tabpanel">
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">New Arrivals</label>
                                                <input type="checkbox" name="new_arrival" class="form-control"/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Feature Products</label>
                                                <input type="checkbox" name="feature_products" class="form-control"/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Popular Products</label>
                                                <input type="checkbox" name="popular_products" class="form-control"/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Offer Products</label>
                                                <input type="checkbox" name="offer_products" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Show Hide</label>
                                                <input type="checkbox" name="status" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3 text-right">
                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                </div>

                            </div>


<!--
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Group Id (Name)</label>
                                    <select name="group_id" class="form-control">
                                        <option value="">select</option>
                                        {{-- @foreach ($product as $gitem)
                                             <option value="{{ $gitem->id }}">{{ $gitem->name }}</option>
                                        @endforeach --}}

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Group Name">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea rows="4" name="description" class="form-control" placeholder="Enter Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="File" name="category_img" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Icon</label>
                                    <input type="File" name="category_icon" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Show/Hide</label>
                                    <input type="checkbox" name="status" class="" placeholder="Enter Description"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">

                                    <button type="submit" class="btn btn-primary" >Save</button>
                                </div>
                            </div>
                        </div>-->
                    </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
