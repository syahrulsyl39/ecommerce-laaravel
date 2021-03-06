@extends('backend.layout.index')

@section('content')
<div class="row">
    <a href="{{ route('create-c') }}" class="btn btn-primary">Tambah</a>
</div>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $categories as $key => $item )
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->name }}</td>
            <td>
                <a href="{{ route('edit-c', $item->id) }}" class="btn btn-primary">Edit</a>
                <form style="display: inline" action="{{ route('destroy-c', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        <tr>
        @endforeach
</table>

@endsection
