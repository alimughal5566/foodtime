@extends('layouts.admin_dash')
@section('title','User List')
@section('body')

    <div id="mydiv"> </div>
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
                        <b>Food Time Users</b>
                    </div>
                    <div class="card-body">
                        <div id="no-more-tables">
                            <table class="table table-responsive table-bordered text-center" id="dataTable" width="100%"
                                   cellspacing="0">
                                <thead class="bg-grey">
                                <tr class="">
                                    <th>User Id</th>
                                    <th>User Name</th>
                                    <th>User Type</th>
                                    <th>User Email</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user_list as $userlist)
                                    <tr>
                                        <td >{{$userlist->id}}</td>
                                        <td >{{$userlist->name}}</td>
                                        <td >{{$userlist->type}}</td>
                                        <td >{{$userlist->email}}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                </div>

                    <div class="card-footer small text-muted">Last Updated
                        at {{$userlist->updated_at->format('d M, Y h:i A')}}</div>
                </div>
            </div>

        </div>
    </div>
@endsection
