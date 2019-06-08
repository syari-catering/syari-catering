@extends('admin.partials.default')

@section('content')           
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Aturan Paket</h1>
    <hr>
    <form action="{{ route('admin.packetrule.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf            
        <div class="form-group">
            <label for="packet">Nama Paket</label>            
            <select name="packet" id="packet" class="form-control">                                
                @foreach ($packets as $packet)
                    <option value="{{ $packet->id }}">{{ $packet->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Ketentuan Paket</label>
            <textarea type="text" rows="10" class="form-control {{ $errors->has('description') ? 'is-invalid' : ' ' }}"  name="description" id="description" placeholder="Masukkan Keterangan....">{{ old('description') }}</textarea>
            <div class="invalid-feedback">
                {{ $errors->first('description') }}
            </div>
        </div>                    
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
        
    </form>  
</div>
@endsection
