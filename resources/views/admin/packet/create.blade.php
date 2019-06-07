@extends('admin.partials.default')

@section('content')           
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Paket</h1>
    <hr>
    <form action="{{ route('admin.packet.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf            
        <div class="form-group">
            <label for="name">Nama Paket</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}" value="{{ old('name') }}" id="name" name="name" placeholder="Masukkan Nama Paket..........">
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>  
        </div>  
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
        
    </form>  
</div>
@endsection
