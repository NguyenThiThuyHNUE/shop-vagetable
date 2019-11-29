@extends("layouts.admin")
@section("content")
    <div class="container">
        <span>        <h3>List Shipment</h3></span>
        <span><a class="btn btn-primary" href="#">Add Shipment</a></span>
        <hr/>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name Employe</th>
                <th scope="col">Bill ID</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($shipments as $key => $ship)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $ship->employee_id }}</td>
                    <td>{{ $ship->bill_id }}</td>
                    <td>
                        <div class="d-flex">
                            <div class="pr-2">
                                <a href="#" class="btn btn-primary">Info</a>
                            </div>
                            <div class="pr-2">
                                <form action="#" method="post">
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
