@extends('layouts.admin_dash')
@section('title','Add Product')
@section('body')

            <h1 class="h3 mb-4 align-content-center ">Update Product</h1>

            <!-- Page Heading -->
            <form action="{{route('product_update')}}" method="post" class="needs-validation"  novalidate>
                {{csrf_field()}}

                @if(session('message'))
                    <p class="alert alert-success">{{session('message')}}</p>
                @endif

                <div class="form-group">
                    <input type="hidden" name="id" value="{{$product->id}}">
                </div>

               <div class="row col-md-12">
                   <div class="col-sm-5">
                       <label for="validationCustom01" class="">Product Name</label>
                       <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" value="{{$product->product_name}}" id="validationCustom01" placeholder="Product name" value="" required>
                       <div class="invalid-feedback">
                           Product Name Required
                       </div>
                       @error('product_name')
                       <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                       @enderror

                   </div>

                   <div class="col-sm-5">
                       <label for="exampleFormControlSelect1">Catagory</label>
                       <div class="invalid-feedback">
                           Please Select catagory
                       </div>
                       <select class="form-control" name="category_id" id="validationCustom12">
                           <option disabled=""> Please Select catagory</option>

                             @foreach($categories as $catagory)
                            <option value="{{$catagory->id}}">{{$catagory->name}}</option>
                            @endforeach
                       </select>
                   </div>
               </div>



                <div class="row col-md-12">
                    <div class="col-md-5">
                        <label for="validationCustom03" class="">Price</label>
                        <input type="number" name="price" class="form-control  @error('price') is-invalid @enderror" value="{{$product->price}}" min="0" id="validationCustom03" placeholder="Price" required>
                        <div class="invalid-feedback">
                            Please Add Product Price.
                        </div>
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-sm-5">
                        <label for="validationCustom02" class="">Product Description</label>
                        <textarea name="description"  class="form-control @error('description') is-invalid @enderror" id="validationCustom02"  placeholder="Add Product Description" required>{{$product->description}}</textarea>
                        <div class="invalid-feedback">
                            Please Add description
                        </div>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                        @enderror
                    </div>
                </div>

                <div class="row col-md-12">
                    <div class="col-sm-5">
                        <label for="validationCustom02" class="">Product Ingredients</label>
                        <textarea name="Ingredients"  class="form-control @error('Ingredients') is-invalid @enderror" id="validationCustom02" placeholder="Add Product Ingredients" required>{{$product->Ingredients}}</textarea>
                        <div class="invalid-feedback">
                         Please Add Ingredients
                        </div>
                        @error('Ingredients')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="row col-md-12">

                    <div class="col-md-5 pt-5">

                        <button class="btn  btn-outline-primary" type="submit">Update product</button>

                    </div>
                </div>

            </form>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

    </script>
@endsection
