@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #cbd3da">
                    <div class="card-header">
                        Update Product
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update' ,$id) }}" method="post" enctype="multipart/form-data">
                            @method("put")
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right" >
                                    Name
                                </label>
                                <div class="col-md-6">
                                    <input type="text" name="productName" class="form-control" value="{{$product->productName}}">
                                </div>
                                @if($errors-> has('productName'))
                                    <span class="text-danger">{{$errors->first('productName')}}</span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Price
                                </label>
                                <div class="col-md-6">
                                    <input type="text" name="productPrice" class="form-control" value="{{$product->productPrice}}">
                                    @if($errors-> has('productPrice'))
                                        <span class="text-danger">{{$errors->first('productPrice')}}</span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Provider
                                </label>
                                <div class="col-md-6">
                                    <input type="text" name="provider" class="form-control" value="{{$product->provider}}">
{{--                                    @if($errors-> has('productPrice'))--}}
{{--                                        <span class="text-danger">{{$errors->first('productPrice')}}</span>--}}
{{--                                    @endif--}}
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Count
                                </label>
                                <div class="col-md-6">
                                    <input type="number" name="count" class="form-control" value="{{$product->count}}">
                                </div>
                                {{--                                @if($errors-> has('provider'))--}}
                                {{--                                    <span class="text-danger">{{$errors->first('productPrice')}}</span>--}}
                                {{--                                @endif--}}
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Product Image</label>

                                <input type="file" class="" name="image" >
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-success" type="submit">
                                        Update
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
