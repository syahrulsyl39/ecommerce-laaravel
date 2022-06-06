@extends('backend.layout.index')

@section('content')
<form action="{{ route('store-contact', $contacts->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="floatingInput">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
            placeholder="" name="name">
            @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
            placeholder="" name="email">
            @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Pesan</label>
        <input type="text" class="form-control @error('message') is-invalid @enderror" id="floatingInput"
            placeholder="" name="message">
            @error('message')
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
