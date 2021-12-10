@extends('products.form')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>List of Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.create') }}"> Add New Product</a>
                <a href="{{ url('/home') }}" class="btn btn-primary">Back To Home</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Created At</th>
            <th width="220px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    {{ $products->links() }}


@endsection



