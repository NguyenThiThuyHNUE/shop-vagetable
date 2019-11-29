@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Information Employee
                    </div>
                    <div class="card-body">
                        Employee Name: {{ $employee->employeeName }}<br>
                        Employee Phone {{ $employee->employeePhone }}<br>
                        Employee Address: {{ $employee->employeeAddress }}<br><br>
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary">List</a>
                        <a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-primary">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
