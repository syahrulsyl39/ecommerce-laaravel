@extends('backend.layout.index')

@section('content')
<form action="{{ route('update-p', $products->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="floatingInput">Kode Produk</label>
        <input type="text" class="form-control @error('product_code') is-invalid @enderror" id="floatingInput"
            placeholder="Kode Produk" name="product_code" value="{{ $products->product_code }}">
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
            placeholder="Kategori" name="category" value="{{ $products->category }}">
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
            placeholder="Nama Produk" name="product_name" value="{{ $products->product_name }}">
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
            placeholder="Deskripsi" name="description" value="{{ $products->description }}">
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
            placeholder="Stok" name="stock" value="{{ $products->stock }}">
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
            placeholder="Harga" name="price" value="{{ $products->price }}">
            @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">
        Perbarui
    </button>
</form>
@endsection
