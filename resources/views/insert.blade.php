@extends('layout')

@section('heading')
    insert data
@endsection

@section('main')
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <input type="text" class="form-control rounded-0 mb-3" name="firstName" placeholder="first name">
        <input type="text" class="form-control rounded-0 mb-3" name="lastName" placeholder="last name">
        <input type="text" class="form-control rounded-0 mb-3" name="age" placeholder="age">
        <input type="text" class="form-control rounded-0 mb-3" name="email" placeholder="email">
        <button class="btn btn-success btn-sm rounded-0">insert</button>
    </form>
@endsection