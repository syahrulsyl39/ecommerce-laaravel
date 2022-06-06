@extends('backend.layout.index')

@section('content')
<form action="{{ route('update-contact', $contacts->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="floatingInput">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
            placeholder="" name="name" value="{{ $contacts->name }}">
            @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
            placeholder="" name="email" value="{{ $contacts->email }}">
            @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Pesan</label>
        <input type="text" class="form-control @error('message') is-invalid @enderror" id="floatingInput"
            placeholder="" name="message" value="{{ $contacts->message }}">
            @error('message')
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
