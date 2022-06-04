@extends('backend.layout.index')

@section('content')
<div class="row">
    <a href="{{ route('create-c') }}" class="btn btn-primary">Tambah</a>
</div>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">Nama</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $categories as $key => $item )
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->name }}</td>
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
