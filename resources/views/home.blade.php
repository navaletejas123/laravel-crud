@extends('layout')

@section('heading')
    all users
@endsection

@section('main')
    <div>
        <a href="{{ route('student.create') }}" class="btn btn-success btn-sm rounded-0 mb-3">add +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">first name</th>
                <th scope="col">last name</th>
                <th scope="col">email</th>
                <th scope="col">age</th>
                <th scope="col">view</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->firstName }}</td>
                    <td>{{ $item->lastName }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->email }}</td>
                    <td> <a href="{{ route('student.show', $item->id) }}"
                            class="btn btn-sm btn-warning rounded-0 fw-bold">view</a> </td>
                    <td> <a href="{{ route('student.edit', $item->id) }}"
                            class="btn btn-sm btn-warning rounded-0 fw-bold">edit</a> </td>
                    <td>
                        <form action="{{ route('student.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-warning rounded-0 fw-bold">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
