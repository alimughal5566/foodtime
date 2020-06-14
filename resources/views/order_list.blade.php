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
                        <b>Order List</b>
                    </div>
                    <div class="card-body">
                        <div id="no-more-tables">
                            <table class="table table-responsive table-bordered text-center" id="dataTable" width="100%"
                                   cellspacing="0">
                                <thead class="bg-grey">
                                <tr class="">
                                    <th>Order ID</th>
                                    <th>User Name</th>
                                    <th>Amount</th>
                                    <th>Product name</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $order_list)
                                    <tr>
                                        <td >{{$order_list->id}}</td>
                                        <td >{{\App\User::find($order_list->user_id)->name}}</td>
                                        <td >{{$order_list->total_ammount}}</td>
                                        <td >
                                            <!-- Button trigger modal -->
                                            <button type="button" id="orderid" class="btn btn-primary my_button" onclick="window.location.href = '{{url('/orderdetails/').$order_list->id}}'"
                                             data-toggle="modal" data-target="#exampleModalLong">
{{--                                                value="{{$order_list->id}}"--}}
                                                View Order Detail
                                            </button>
{{--                                            onclick="window.location.href = '{{url('/orderdetails/').$order_list->id}}'"--}}
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table>
                                                                <th>Order ID</th>
                                                                <th>Product Name</th>
                                                                <th>Amount</th>
                                                                <tbody id="tbody">

                                                                </tbody>
                                                                @if(isset($data))
                                                                @foreach($data->product as $table)
                                                                <tr>
                                                                    <td>{{$table->id}}</td>
                                                                    <td>
                                                                        {{$table->price}}
                                                                    </td>
                                                                </tr>
                                                                    @endforeach
                                                                    @endif
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
{{--                                            @foreach($order_list->product as $table)--}}
{{--                                                {{$table->pivot->product_id}}--}}
{{--                                                {{$table->product_name}}--}}
{{--                                        @endforeach--}}
                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                </div>


                    <div class="card-footer small text-muted">Last Updated
                        at {{$order_list->updated_at->format('d M, Y h:i A')}}</div>
                </div>
            </div>

        </div>
    </div>
{{--    <script--}}
{{--        src="https://code.jquery.com/jquery-3.5.1.js"--}}
{{--        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="--}}
{{--        crossorigin="anonymous"></script>--}}
{{--    <script>--}}
{{--        // var orderid=document.getElementById(orderid).value;--}}
{{--        $(document).ready(function() {--}}
{{--            $('.my_button').click(function() {--}}
{{--                var orderid=$(this).attr("value");--}}
{{--                $.ajax({--}}
{{--                    type: "get",--}}
{{--                    url: "/orderdetails/",--}}
{{--                    dataType: "JSON",--}}
{{--                    data: {orderid:orderid--}}
{{--                    },--}}
{{--                    success: function( data ) {--}}
{{--                            // $('#tbody').append("<tr><td></td><td>Thomas</td></tr>");--}}
{{--                        console.log(data);--}}
{{--                        }--}}

{{--                })--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
