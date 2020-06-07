@extends('layouts.admin_dash')
@section('title','add category')
@section('body')
    <div class="row col-md-12">
        <div class="col-md-6">

            <h1 class="h3 mb-4 align-content-center ">Add Category</h1>

            <!-- Page Heading -->
            <form action="{{route('add_category')}}" method="post" class="needs-validation"  novalidate>
                {{csrf_field()}}

                @if(session('message'))
                    <p class="alert alert-success">{{session('message')}}</p>
                @endif


                <div class="form-group">
                    <div class="mb-3">
                        <label for="validationCustom01" class="">Category Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="validationCustom01" placeholder="Category" value="" required>
                        <div class="invalid-feedback">
                            Category Name Required
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert" class="input-group-addon">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn  btn-outline-primary" type="submit">Add Category</button>
                </div>
            </form>
        </div>
    </div>
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
