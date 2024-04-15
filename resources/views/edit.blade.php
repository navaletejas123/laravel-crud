@extends('layout')

@section('heading')
    update data
@endsection

@section('main')
    <form action="{{ route('student.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" value="{{ $user->firstName }}"  class="form-control rounded-0 mb-3" name="firstName" placeholder="first name">
        <input type="text" value="{{ $user->lastName }}"  class="form-control rounded-0 mb-3" name="lastName" placeholder="last name">
        <input type="text" value="{{ $user->age }}"  class="form-control rounded-0 mb-3" name="age" placeholder="age">
        <input type="text" value="{{ $user->email }}"  class="form-control rounded-0 mb-3" name="email" placeholder="email">
        <button type="submit" class="btn btn-success btn-sm rounded-0">update</button>
    </form>
@endsection