@extends('backend.layout.index')

@section('content')
<form action="{{ route('store-c') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="floatingInput">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
            placeholder="Masukkan Nama" name="name">
            @error('name')
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
