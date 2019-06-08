@extends('admin.partials.default')

@section('content')           
  @include('admin.alert')  
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Menu</h1>
  {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}
  <hr>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">            
      <a href="{{ route('admin.menu.create') }}" class="btn btn-primary">Tambah Menu</a>      
    </div>  
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>No</th>
              <th>Nama Masakan</th>
              <th>Harga</th>
              <th>Detail</th>
              <th>Image</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr align="center">              
              <th>No</th>
              <th>Nama Masakan</th>
              <th>Harga</th>
              <th>Detail</th>
              <th>Image</th>
              <th colspan="2">Action</th>
            </tr>
          </tfoot>
          <tbody>
<<<<<<< HEAD
            @foreach ($posts as $post)
               <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{ Str::limit ($post->content, 50)}}</td>
                <td><a href="{{route('admin.category.post',$post->category)}}">{{$post->Category->name}}</a></td>
                <td><img src="{{asset($post->image) ?? '    '}}" height="100px"></td>
                <td style="text-align: center;"><a href="{{route('admin.post.edit',$post)}}"><button class="btn btn-success" style="width: 70px;">Edit</button></a></td>
                <td align="center">
                  <form action="" method="POST">
                      @method("DELETE")
                      @csrf
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?')">Delete</button>
                  </form>              
                </td>
               </tr>
            @endforeach
=======
            <?php $no = 0;?>
            @foreach ($menus as $menu)
            <?php $no++ ;?>
>>>>>>> refs/remotes/origin/master
            <tr>
              <td align="center">{{ $no }}</td>
              <td>{{ $menu->name }}</td>
              <td>{{ $menu->price }}</td>
              <td>{{ $menu->detail }}</td> 
              <td align="center"><img src="{{ asset($menu->image) }}" height="100px" width="180px" alt="gambar masakan"></td>
              <td align="center">
                  <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn btn-warning btn-circle">
                    <i class="fas fa-exclamation-triangle"></i>
                  </a>
              </td>
              <td align="center">
                <form action="{{ route('admin.menu.destroy', $menu) }}" method="POST">
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
