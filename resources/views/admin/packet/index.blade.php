@extends('admin.partials.default')

@section('content')           
  @include('admin.alert')  
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Paket</h1>
  {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}
  <hr>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">            
      <a href="{{ route('admin.packet.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>No</th>
              <th>Nama Paket</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr align="center">              
              <th>No</th>
              <th>Nama Paket</th>
              <th colspan="2">Action</th>
            </tr>
          </tfoot>
          <?php $no = 0;?>
          @foreach ($packets as $packet)
          <tbody>            
            <?php $no++ ;?>
            <tr>
              <td align="center">{{ $no }}</td>
              <td>{{ $packet->name }}</td>                            
              <td align="center">
                  <a href="{{ route('admin.packet.edit', $packet->id) }}" class="btn btn-warning btn-circle">
                    <i class="fas fa-exclamation-triangle"></i>
                  </a>
              </td>
              <td align="center">
                <form action="{{ route('admin.packet.destroy', $packet) }}" method="POST">
                  @method("DELETE")
                  @csrf
                  <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Menghapus Data Ini ?')"><i class="fas fa-trash"></i></button>
                </form>              
              </td>
            </tr>           
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
