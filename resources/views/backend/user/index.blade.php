@extends('backend.layout.index')

@section('content')
<div class="row">
    <a href="{{ route('create-p') }}" class="btn btn-primary">Tambah</a>
</div>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">Kode User</th>
            <th scope="col">Nama User</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $users as $key => $item )
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->email_verified_at }}</td>
            <td>{{ $item->password }}</td>
            <td>{{ $item->role }}</td>
            <td>
                <a href="" class="btn btn-primary">Edit</a>
                <form style="display: inline" action="" method="POST">
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
