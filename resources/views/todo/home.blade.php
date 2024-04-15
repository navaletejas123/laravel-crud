@extends('layout')

@section('heading')
{{-- <p class="">to do project</p> --}}
  
@endsection

@section('main')
    <form action="{{ route('todo.store') }}" method="post">
        @csrf
        <div class="row mx-auto">
            <div class="col-9">
                <input type="text" class="form-control rounded-0 shadow-none text-center" placeholder="enter task" name="task">
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-danger fw-bold m-auto d-block rounded-0">add task +</button>
            </div>
        </div>
    </form>
    <div class="row mt-5">
        <div class="col">
            <table class="table table-bordered table-striped table-warning text-center">
                <thead>
                    <tr>
                        <th scope="col">task name</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($task as $item)
                        <tr>
                            <td>{{ $item->todo }}</td>
                            <td class="d-flex justify-content-center gap-3">
                                <a href="{{ route('todo.show', $item->id) }}" class="btn btn-sm rounded-0 text-white view">view</a>
                                <a href="{{route('todo.edit',$item->id)}}" class="btn btn-sm rounded-0 text-white edit">edit</a>
                                <form action="{{route('todo.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm rounded-0 text-white delete">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
