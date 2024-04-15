@extends('layout')

@section('heading')
    single record
@endsection

@section('main')
    <h3>task name = {{ $data->todo }}</h3>
@endsection