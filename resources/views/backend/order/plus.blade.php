@extends('backend.layout.index')

@section('content')
<form action="{{ route('store-o') }}" method="POST" enctype="multipart/form-data">
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
        <input type="text" class="form-control @error('category_id') is-invalid @enderror" id="floatingInput"
            placeholder="Kategori" name="category_id">
            @error('category_id')
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
        <label for="floatingInput">Jumlah Pesanan</label>
        <input type="text" class="form-control @error('order_quantity') is-invalid @enderror" id="floatingInput"
            placeholder="JUmlah Pesanan" name="order_quantity">
            @error('order_quantity')
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
    <div class="form-group">
        <label for="floatingInput">Tanggal Pesanan</label>
        <input type="date" class="form-control @error('order_date') is-invalid @enderror" id="floatingInput"
            placeholder="Tanggal Pesanan" name="order_date">
            @error('order_date')
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
