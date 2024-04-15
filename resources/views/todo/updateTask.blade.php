@extends('layout')

@section('heading')
    update taks
@endsection

@section('main')
    <form action="{{ route('todo.update', $data->id) }}" method="post">
        @csrf
        @method('put')
        <div class="row mx-auto">
            <div class="col-9">
                <input type="text" class="form-control rounded-0 shadow-none text-center" value="{{ $data->todo }}"
                    name="task">
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-danger fw-bold m-auto d-block rounded-0">update task +</button>
            </div>
        </div>
    </form>
@endsection
