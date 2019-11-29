@extends("layouts.admin")
@section("content")
    <div class="container">
        <span>        <h3>List Employee</h3></span>
        <span><a class="btn btn-primary" href="{{ route('employees.create') }}">Add Employee</a></span>
        <hr/>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $key => $employee)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $employee->employeeName }}</td>
                    <td>{{ $employee->employeePhone }}</td>
                    <td>{{ $employee->employeeAddress }}</td>
                    <td>
                        <div class="d-flex">
                            <div class="pr-2">
                                <a href="{{ route('employees.show',$employee->id) }}" class="btn btn-primary">Info</a>
                            </div>
                            <div class="pr-2">
                                <form action="{{ route('employees.destroy',$employee->id) }}" method="post">
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
