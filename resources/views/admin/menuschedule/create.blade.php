@extends('admin.partials.default')

@section('content')           
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Menu</h1>
    <hr>
    <form action="{{ route('admin.menuschedule.store') }}" autocomplete="off" method="POST" enctype="multipart/form-data">
        @csrf            
        <div class="form-group">
            <label for="menu">Nama Menu</label>            
            <select name="menu" id="menu" class="form-control">                                
                @foreach ($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date">Posting Hari Ke- <font color="blue">(Antara Angka 1-15)</font></label>
            <select name="date" id="date" class="form-control">
                @for ($i = 1; $i <= 15; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>            
            <div class="invalid-feedback">
                {{ $errors->first('date') }}
            </div>  
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
        
    </form>  
</div>
@endsection