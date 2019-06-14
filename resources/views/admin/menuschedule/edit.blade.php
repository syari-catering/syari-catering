@extends('admin.partials.default')

@section('content')           
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Data Menu</h1>
    <hr>
    <form action="{{ route('admin.menuschedule.update', $menuschedule) }}" autocomplete="off" method="POST" enctype="multipart/form-data">
        @csrf            
        @method("PUT")
        <div class="form-group">
            <label for="menu">Nama Masakan</label>            
            <select name="menu" id="menu" class="form-control">                                
                @foreach ($menus as $menu)               
                    @if ($menu->id == $menuschedule->menu_id)
                    <option value="{{ old('menu') ?? $menu->id }}" selected>{{ old('menu') ?? $menu->name }}</option>                                                       @else {
                        <option value="{{ old('menu') ?? $menu->id }}">{{ old('menu') ?? $menu->name }}</option>                                             
                    }
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date">Tanggal Menu Disajikan</label>
        <input type="number" name="date" id="Date" class="form-control" min="1" value="{{$menuschedule->date}}" disabled>
            <div class="invalid-feedback">
                {{ $errors->first('date') }}
            </div>  
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Ubah">
        </div>
        
    </form>  
</div>

@endsection