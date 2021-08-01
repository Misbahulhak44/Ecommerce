@extends('layouts.frontend')

@section('title')
    Collection - Category - SubCategory - Products
@endsection

@section('content')

    <div class="card mb-5 card py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <label for="">Collection /{{ $subcategory->category->group->name }} / {{ $subcategory->category->name }} / {{ $subcategory->name }}</label>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($products as $prod_item)
                        <div class="col-md-3 mb-4">
                            <a href="{{ url('collection/'.$prod_item->subcategory->category->group->url.'/'.$prod_item->subcategory->category->url.'/'.$prod_item->subcategory->url.'/'.$prod_item->url) }}" class="text-center">
                            <div class="card">
                                <img src="{{ asset('uploads/products/' .$prod_item->image) }}" class="w-100" alt="">
                                <div class="card-body bg-light">

                                        <h6 class="mb-0">{{ $prod_item->name }}</h6>

                                </div>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
