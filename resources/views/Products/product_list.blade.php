@extends('layouts.admin_dash')
@section('title','Product List')
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
                        <b>Food Time Products</b>
                    </div>
                    <div class="card-body">
                        <div id="no-more-tables">
                            <table class="table table-responsive table-bordered text-center" id="dataTable" width="100%"
                                   cellspacing="0">
                                <thead class="bg-grey">
                                <tr class="">
                                    <th>Product id</th>
                                    <th>Product view</th>
                                    <th>Product Name</th>
                                    <th>category Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>ingredients</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>Disable</th>
                                    <th>Enable</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product_list as $product)
{{--                                    @dd($product);--}}
                                    <tr>
                                        <td >{{$product->id}}</td>
                                        <td ><img src="{{ asset('images/'.$product['thumbnail']) }}" style="height: 40px;width: 40px"></td>
                                        <td >{{$product->product_name}}</td>
                                        <td >{{$product->Category['name']}}</td>
                                        <td >{{$product->description}}</td>
                                        <td >{{$product->price}}</td>
                                        <td >{{$product->Ingredients}}</td>

                                        <td>
                                            <a href="{{route('edit_product',[$product->id])}}" class="btn btn-outline-success">Edit</a>

                                        </td>
                                        <td>
                                            <a href="{{route('product_delete',[$product->id])}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>

                                        </td>
                                        <td>
                                            <a href="" class="btn btn-outline-danger" onclick="return confirm('Are you want to disable this?');" > Disable</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-outline-success" onclick="return confirm('Are you want to enable this?');" > Enable</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                                        <div class="card-footer small text-muted">Last Updated
                                            at {{$product->updated_at->format('d M, Y h:i A')}}</div>

                </div>
            </div>

        </div>
    </div>
@endsection
