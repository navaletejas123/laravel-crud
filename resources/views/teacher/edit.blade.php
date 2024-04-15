@extends('../layout')

@section('heading')
    update teacher
@endsection

@section('main')
    <form action="{{ route('teacher.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" value="{{ $user->teacher_name }}" class="form-control rounded-0 mb-3" name="teacherName" placeholder="teacher name">
        <input type="text" value="{{ $user->subject }}" class="form-control rounded-0 mb-3" name="subject" placeholder="subject">
        <input type="text" value="{{ $user->experiance }}" class="form-control rounded-0 mb-3" name="experiance" placeholder="experiance">
        <input type="text" value="{{ $user->school_name }}" class="form-control rounded-0 mb-3" name="schoolName" placeholder="school name">
        <button type="submit" class="btn btn-sm btn-success rounded-0">save</button>
    </form>
@endsection