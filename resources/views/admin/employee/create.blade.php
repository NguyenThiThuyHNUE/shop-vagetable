@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #cbd3da">
                    <div class="card-header">
                        Register Employee
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Name
                                </label>
                                <div class="col-md-6">
                                    <input type="text" name="employeeName" class="form-control" required value="{{ old('employeeName') }}">
                                    @if($errors->has('employeeName'))
                                        <span class="text-md-left text-danger">{{ $errors->first('employeeName') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Phone
                                </label>
                                <div class="col-md-6">
                                    <input type="text" name="employeePhone" class="form-control" required value="{{ old('employeePhone') }}">
                                    @if($errors->has('employeePhone'))
                                        <span class="text-md-left text-danger">{{ $errors->first('employeePhone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">
                                    Address
                                </label>
                                <div class="col-md-6">
                                    <input type="test" name="employeeAddress" class="form-control" required>
                                    @if($errors->has('employeeAddress'))
                                        <span class="text-md-left text-danger">{{ $errors->first('employeeAddress') }}</span>
                                    @endif
                                </div>
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
