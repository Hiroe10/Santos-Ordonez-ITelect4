@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('employee.create')}}" class="btn btn-info">New Employee</a>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Middle Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Zip</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $items)
                                    <tr> 
                                        <td>{{$items->id}}</td>
                                        <td>{{ $items->fname}}</td>
                                        <td>{{ $items->lname}}</td>
                                        <td>{{ $items->midname}}</td>
                                        <td>{{ $items->age}}</td>
                                        <td>{{$items->address}}</td>
                                        <td>{{$items->zip}}</td>
                                        
                                        <td> 
                                                <span class="badge bg-success"><a href="{{route('employee.edit',$items->id)}}" class="btn btn-success mx-3"><h5>Edit</h5></a></span>
                                                <span class="badge bg-danger"><a href="{{route('employee.delete',$items->id)}}" class="btn btn-danger mx-3"><h5>Delete</h5></a></span>
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
    </div>
</div>
@endsection