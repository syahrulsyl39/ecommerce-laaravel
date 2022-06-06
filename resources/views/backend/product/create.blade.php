@extends('backend.layout.index')

@section('content')
<form action="{{ route('store-p') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="floatingInput">Kode Produk</label>
        <input type="text" class="form-control @error('product_code') is-invalid @enderror" id="floatingInput"
            placeholder="Kode Produk" name="product_code">
            @error('product_code')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    @csrf
    <div class="form-group">
        <label for="floatingInput">Kategori</label>
        <input type="text" class="form-control @error('category') is-invalid @enderror" id="floatingInput"
            placeholder="Kategori" name="category">
            @error('category')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    @csrf
    <div class="form-group">
        <label for="floatingInput">Nama Produk</label>
        <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="floatingInput"
            placeholder="Nama Produk" name="product_name">
            @error('product_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    @csrf
    <div class="form-group">
        <label for="floatingInput">Deskripsi</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="floatingInput"
            placeholder="Deskripsi" name="description">
            @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    @csrf
    <div class="form-group">
        <label for="floatingInput">Stok</label>
        <input type="text" class="form-control @error('stock') is-invalid @enderror" id="floatingInput"
            placeholder="Stok" name="stock">
            @error('stock')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    @csrf
    <div class="form-group">
        <label for="floatingInput">Harga</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="floatingInput"
            placeholder="Harga" name="price">
            @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">
        Kirim
    </button>
</form>
@endsection
