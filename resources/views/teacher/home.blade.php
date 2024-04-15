@extends('../layout')

@section('heading')
    get all teacher
@endsection

@section('main')
    <div>
        <a href="{{ route('teacher.create') }}" class="btn btn-success btn-sm rounded-0 mb-3">add +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">teacher name</th>
                <th scope="col">subject</th>
                <th scope="col">experiance</th>
                <th scope="col">school name</th>
                <th scope="col">view</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
                <tr>
                    <td>{{ $item->teacher_name }}</td>
                    <td>{{ $item->subject }}</td>
                    <td>{{ $item->experiance }}</td>
                    <td>{{ $item->school_name }}</td>
                    <td><a href="{{route('teacher.show', $item->id)}}" class="btn btn-sm btn-primary rounded-0">view</a></td>
                    <td><a href="{{route('teacher.edit', $item->id)}}" class="btn btn-sm btn-primary rounded-0">edit</a></td>
                    <td>
                        <form action="{{ route('teacher.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-primary rounded-0">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
