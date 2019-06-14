@extends('admin.partials.default')

@section('content')           

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">            
      <a href="post/create" class="btn btn-primary">Add Post</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr align="center">
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th colspan="2">Action</th>
            </tr>
          </tfoot>
          <tbody>
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
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td align="center">
                  <a href="" class="btn btn-warning">Update</a>                                  
              </td>
              <td align="center">
                  <form action="" method="POST">
                      @method("DELETE")
                      @csrf
                      <button type="submit" v class="btn btn-danger" onclick="return confirm('Yakin?')">Delete</button>
                  </form>              
              </td>
            </tr> 
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
