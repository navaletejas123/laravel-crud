@extends('layout')

@section('heading')
    single user
@endsection

@section('main')
    <h3>id : {{$student->id}}</h3>
    <h3>first name : {{$student->firstName}}</h3>
    <h3>last name : {{$student->lastName}}</h3>
    <h3>age : {{$student->age}}</h3>
    <h3>email : {{$student->email}}</h3>
    <a href="{{ route('student.index') }}" class="btn btn-sm btn-dark rounded-0 mt-5 fw-bold">back</a>
@endsection