@extends('backend.layout.index')

@section('content')
<div class="row">
    <a href="{{ route('create-o') }}" class="btn btn-primary">Tambah</a>
</div>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">Kode Product</th>
            <th scope="col">Katagori</th>
            <th scope="col">Nama Product</th>
            <th scope="col">Alamat</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ( $products as $key => $item )
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->product_code }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->stock }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <a href="{{ route('edit', $item->id) }}" class="btn btn-primary">Edit</a>
                <form style="display: inline" action="{{ route('destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        <tr>
        @endforeach --}}
</table>

@endsection
