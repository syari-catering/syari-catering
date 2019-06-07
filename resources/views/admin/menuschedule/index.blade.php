@extends('admin.partials.default')

@section('content')           
  @include('admin.alert')
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Jadwal Menu</h1>
  {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}
  <hr>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">            
      <a href="{{ route('admin.menuschedule.create') }}" class="btn btn-primary">Tambah Jadwal</a>      
    </div>  
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>No</th>
              <th>Nama Menu</th>
              <th>Postingan Menu Hari Ke-</th>              
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr align="center">              
              <th>No</th>
              <th>Nama Menu</th>
              <th>Postingan Menu Hari Ke-</th>              
              <th colspan="2">Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $no = 0;?>
            @foreach ($menuschedules as $menuschedule)
            <?php $no++ ;?>
            <tr>
              <td align="center">{{ $no }}</td>
              <td>{{ $menuschedule->menu->name }}</td>
              <td align="center">{{ $menuschedule->date }}</td>                            
              <td align="center">
                  <a href="{{ route('admin.menuschedule.edit', $menuschedule->id) }}" class="btn btn-warning btn-circle">
                    <i class="fas fa-exclamation-triangle"></i>
                  </a>
              </td>
              <td align="center">
                <form action="{{ route('admin.menuschedule.destroy', $menuschedule) }}" method="POST">
                  @method("DELETE")
                  @csrf
                  <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Menghapus Data Ini ?')"><i class="fas fa-trash"></i></button>
                </form>              
              </td>
            </tr> 
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
