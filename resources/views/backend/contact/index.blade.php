@extends('backend.layout.index')

@section('content')
<div class="row">
    <a href="{{ route('create-contact') }}" class="btn btn-primary">Tambah</a>
</div>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Pesan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $contacts as $key => $item )
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->message }}</td>
            <td>
                <a href="{{ route('edit-contact', $item->id) }}" class="btn btn-primary">Edit</a>
                <form style="display: inline" action="{{ route('destroy-contact', $item->id) }}" method="POST">
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
