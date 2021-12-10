@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Welcome To Best Product List') }} </h2><br>{{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                       <strong><h2>Now you can add new Product or watch them in Product List</h2></strong>
                        <br>
                        <a class="btn btn-primary" href="{{ route('products.create') }}">Add new Product</a>
                        <br>
                        <br>
                        <a class="btn btn-primary" href="/products">Product List</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
