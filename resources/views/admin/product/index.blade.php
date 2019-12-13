@extends("layouts.admin")
@section("content")
    <div class="container">
        <span><h3>List Product</h3></span>
        <span><a class="btn btn-primary" href="{{ route('products.create') }}">Add Product</a></span>
        <hr/>
        <table class="table" style="border: 1px solid">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product-ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Provider</th>
                <th scope="col">Count</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ 'PD-'.$product->id }}</td>
                    <td>{{ $product->productName }}</td>
                    <td>{{ number_format($product->productPrice) }}</td>
                    <td><img src="{{ asset("storage/$product->image") }}" class="img-thumbnail" alt=""
                             style="width: 100px"></td>
                    <td>{{ 'PD-'.$product->provider }}</td>
                    <td>{{ 'PD-'.$product->count }}</td>
                    <td>
                        <div class="d-flex">
                            <div class="pr-2">
                                <a href="{{ route('products.show',$product->id) }}" class="btn btn-primary">Info</a>
                            </div>
                            <div class="pr-2">
                                <form action="{{ route('products.destroy',$product->id) }}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>

                        </div>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
