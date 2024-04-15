@extends('layout')

@section('heading')
    single product
@endsection

@section('main')
    <h3> product name => {{ $data->productName }}</h3>
    <h3> price =>  {{ $data->price }}</h3>
    <h3> company => {{ $data->company }}</h3>
@endsection