@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #cbd3da">
                    <div class="card-header">
                        Create Product
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Product Name
                                </label>
                                <div class="col-md-6">
                                    <input type="text" name="productName" class="form-control">
                                </div>
                                @if($errors-> has('productName'))
                                    <span class="text-danger">{{$errors->first('productName')}}</span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Product Price
                                </label>
                                <div class="col-md-6">
                                    <input type="number" name="productPrice" class="form-control">
                                </div>
                                @if($errors-> has('productPrice'))
                                    <span class="text-danger">{{$errors->first('productPrice')}}</span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Provider
                                </label>
                                <div class="col-md-6">
                                    <input type="text" name="provider" class="form-control">
                                </div>
{{--                                @if($errors-> has('provider'))--}}
{{--                                    <span class="text-danger">{{$errors->first('productPrice')}}</span>--}}
{{--                                @endif--}}
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Count
                                </label>
                                <div class="col-md-6">
                                    <input type="number" name="count" class="form-control">
                                </div>
                                {{--                                @if($errors-> has('provider'))--}}
                                {{--                                    <span class="text-danger">{{$errors->first('productPrice')}}</span>--}}
                                {{--                                @endif--}}
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Product Image</label>

                                <input type="file" class="" name="image">
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
