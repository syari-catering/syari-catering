@extends('admin.partials.default')

@section('content')           

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Kitchen Crew</h1>
  <p class="mb-4">Data anggota mitra pemasak yang terdaftar di Syari Catering</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">            
      <a href="post/create" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>ID</th>
              <th>Name</th>
              <th>Team</th>
              <th>Gender</th>
              <th>Address</th>
              <th>Phone</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr align="center">
                <th>ID</th>
                <th>Name</th>
                <th>Team</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone</th>
              <th colspan="2">Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($kitchenCrews as $kitchenCrew)
                <tr>
                <td>{{$kitchenCrew->id}}</td>
                <td>{{$kitchenCrew->name}}</td>
                <td>{{$kitchenCrew->gender}}</td>
                <td>{{$kitchenCrew->phone}}</td>
                <td>{{ Str::limit ($kitchenCrew->address, 50)}}</td>
                <td>Ini space untuk ID Leader</td>
                {{-- <td><a href="{{route('admin.category.post',$post->category)}}">{{$post->Category->name}}</a></td> --}}
                <td style="text-align: center;"><a href="{{route('admin.kitchen crew.edit',$kitchenCrew)}}"><button class="btn btn-success" style="width: 70px;">Edit</button></a></td>
                <td>
                    <form action="{{route('admin.kitchen crew.destroy',$kitchenCrew->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <input type="submit" value="Hapus" class="btn btn-danger">
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
