@extends('../layout')

@section('heading')
    single teacher
@endsection

@section('main')
        <h3> teacher name = {{ $user->teacher_name}}</h3>
        <h3> subject = {{ $user->subject}}</h3>
        <h3> experiance = {{ $user->experiance}}</h3>
        <h3> school name = {{ $user->school_name}}</h3>
@endsection