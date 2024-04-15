@extends('layout');

@section('heading')
    edit product
@endsection

@section('main')
        <form action="{{ route('product.update', $data->id) }}" method="POST" class="col-8">
            @csrf
            @method('PUT')
            <input type="text" class="form-control rounded-0 mb-3 shadow-none border-2" name="productName"
                placeholder="product name" value="{{ $data->productName }}">
            <input type="text" class="form-control rounded-0 mb-3 shadow-none border-2" name="price" placeholder="price"
                value="{{ $data->price }}">
            <input type="text" class="form-control rounded-0 mb-3 shadow-none border-2" name="company"
                placeholder="company" value="{{ $data->company }}">
            <button type="submit" class="btn btn-sm btn-danger rounded-0">save</button>
        </form>
@endsection
