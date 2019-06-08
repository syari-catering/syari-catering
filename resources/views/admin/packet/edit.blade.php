@extends('admin.partials.default')

@section('content')           
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Data Paket</h1>
    <hr>
    <form action="{{ route('admin.packet.update', $packet) }}" autocomplete="off" method="POST" enctype="multipart/form-data">
        @csrf            
        @method("PUT")
        <div class="form-group">
            <label for="name">Nama Paket</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}" value="{{ old('name') ?? $packet->name }}" id="name" name="name" placeholder="Masukkan Nama Masakan......">
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>  
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Ubah">
        </div>
        
    </form>  
</div>
@endsection
