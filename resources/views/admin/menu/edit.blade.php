@extends('admin.partials.default')

@section('content')           
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Data Menu</h1>
    <hr>
    <form action="{{ route('admin.menu.update', $menu) }}" autocomplete="off" method="POST" enctype="multipart/form-data">
        @csrf            
        @method("PUT")
        <div class="form-group">
            <label for="name">Nama Masakan</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}" value="{{ old('name') ?? $menu->name }}" id="name" name="name" placeholder="Masukkan Nama Masakan......">
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>  
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : ' ' }}" value="{{ old('price') ?? $menu->price }}" id="price" name="price" placeholder="Masukkan Harga.....">
            <div class="invalid-feedback">
                {{ $errors->first('price') }}
            </div>  
        </div>
        <div class="form-group">
            <label for="detail">Keterangan</label>
            <textarea type="text" rows="10" class="form-control {{ $errors->has('detail') ? 'is-invalid' : ' ' }}"  name="detail" id="detail" placeholder="Keterangan Menu Makanan.....">{{ old('detail') ?? $menu->detail  }}</textarea>
            <div class="invalid-feedback">
                {{ $errors->first('detail') }}
            </div>
        </div>                    
        <div class="form-group">
            <label for="image" class="label">Foto</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>                    
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Ubah">
        </div>
        
    </form>  
</div>
@endsection
