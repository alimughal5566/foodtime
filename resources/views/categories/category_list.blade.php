@extends('layouts.admin_dash')
@section('title','category List')
@section('body')
    @if(session('message'))
        <p class="alert alert-success">{{session('message')}}</p>
    @endif

    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        <b>Food Time Categories</b>
                    </div>
                    <div class="card-body">
                        <div id="no-more-tables">
                            <table class="table table-responsive table-bordered text-center" id="dataTable" width="100%"
                                   cellspacing="0">
                                <thead class="bg-grey">
                                <tr class="">
                                    <th>Category id</th>
                                    <th>Category Name</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categorylist as $category)
                                    <tr>
                                        <td >{{$category->id}}</td>
                                        <td >{{$category->name}}</td>
                                        <td>
                                            <a href="{{route('category_edit',[$category->id])}}" class="btn btn-outline-success">Edit</a>
{{--                                            <a href="{{route('category_edit',[$category->id])}}" class="btn btn-primary">Edit</a>--}}
                                        </td>
                                        <td>
                                            <a href="{{route('category_delete',[$category->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
{{--                                            <a href="{{route('category_delete',[$category->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>--}}

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Last Updated
                        at {{$category->updated_at->format('d M, Y h:i A')}}</div>
                    </div>
                </div>
        </div>
    </div>


@endsection
