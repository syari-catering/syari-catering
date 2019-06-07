@extends('admin.partials.default')

@section('content')           
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Jadwal Menu</h1>
    <hr>
    <form action="{{ route('admin.menu.store') }}" autocomplete="off" method="POST" enctype="multipart/form-data">
        @csrf                    
        <div class="form-group">
            <label for="name">Menu Makanan</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}" value="{{ old('name') }}" id="name" name="name" placeholder="Masukkan Nama Menu......">
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>  
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : ' ' }}" value="{{ old('price') }}" id="price" name="price" placeholder="Masukkan Harga Menu Tersebut.....">
            <div class="invalid-feedback">
                {{ $errors->first('price') }}
            </div>  
        </div>
        <div class="form-group">
            <label for="detail">Keterangan</label>
            <textarea type="text" rows="10" class="form-control {{ $errors->has('detail') ? 'is-invalid' : ' ' }}"  name="detail" id="detail" placeholder="Keterangan Menu Makanan.....">{{ old('detail') }}</textarea>
            <div class="invalid-feedback">
                {{ $errors->first('detail') }}
            </div>
        </div>                    
        <div class="form-group">
            <label for="image" class="label">Foto</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>                    
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
        
    </form>  
</div>
@endsection