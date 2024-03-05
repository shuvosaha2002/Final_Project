@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header bg bg-danger">{{ __('Employee Details') }}</div>

                <div class="container mt-5">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $record)
                            <tr>
                                <td>{{$record->id}}</td>
                                <td>{{$record->employee_id}}</td>
                                <td>{{$record->name}}</td>
                                <td>{{$record->phone}}</td>
                                <td>{{$record->email}}</td>
                                <td>{{$record->address}}</td>
                                <td>{{$record->salary}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('update.employee.data',$record->id)}}">Update</a>
                                    <a class="btn btn-danger" href="{{route('delete.employee',$record->id)}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection