@extends('layout')

@section('heading')
    show all product
@endsection

@section('main')
    <a href="{{ route('product.create') }}" class="btn btn-sm btn-success">add product +</a>

    <table class="table mt-5 table-bordered table-striped table-secondary">
        <thead>
            <tr>
                <th scope="col">product name</th>
                <th scope="col">price</th>
                <th scope="col">company</th>
                <th scope="col">view</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->productName }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->company }}</td>
                    <td><a href="{{ route('product.show', $item->id) }}" class="btn btn-sm rounded-0 productview">view</a>
                    </td>
                    <td><a href="{{ route('product.edit', $item->id) }}" class="btn btn-sm rounded-0 productedit">edit</a>
                    </td>
                    <td>
                        <form action="{{ route('product.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm rounded-0 productdelete">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
