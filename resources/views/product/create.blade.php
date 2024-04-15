@extends('layout')

@section('heading')
    create product +
@endsection

@section('main')
    <form action="{{ route('product.store') }}" method="post" class="col-8">
        @csrf
        @method('post')
        <input type="text" class="form-control rounded-0 mb-3 shadow-none border-2" name="productName" placeholder="product name" value="{{old('porductName')}}">
        <input type="text" class="form-control rounded-0 mb-3 shadow-none border-2" name="price" placeholder="price" value="{{old('price')}}">
        <input type="text" class="form-control rounded-0 mb-3 shadow-none border-2" name="company" placeholder="company" value="{{ old('company')}}">
        <button type="submit" class="btn btn-sm btn-danger rounded-0">save</button>
    </form>
@endsection