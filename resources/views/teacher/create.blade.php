@extends('../layout')

@section('heading')
    create teacher
@endsection

@section('main')
    <form action="{{ route('teacher.store') }}" method="post">
        @csrf
        <input type="text" class="form-control rounded-0 mb-3" name="teacherName" placeholder="teacher name">
        <input type="text" class="form-control rounded-0 mb-3" name="subject" placeholder="subject">
        <input type="text" class="form-control rounded-0 mb-3" name="experiance" placeholder="experiance">
        <input type="text" class="form-control rounded-0 mb-3" name="schoolName" placeholder="school name">
        <button class="btn btn-sm btn-success rounded-0">save</button>
    </form>
@endsection