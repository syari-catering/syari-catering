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
        <table class="table table-bordered schedule"  id="dataTable" width="100%" cellspacing="0">
          @foreach ($menuschedules as $menuschedule)
              @if ($menuschedule->date % 7 == 1)
                  <tr>
                    <td>
                      <div class="header">
                        <h5>{{$menuschedule->date}}</h5>
                        <a href="{{ route('admin.menuschedule.edit', $menuschedule->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                      </div>
                      <div class="img-container">
                        <img src="{{asset($menuschedule->menu->image)}}" >
                      </div>
                      <div class="footer">
                          {{$menuschedule->menu->name}}
                      </div>
                    </td>
              @elseif($menuschedule->date % 7 == 0 )
                    <td>
                      <div class="header">
                        <h5>{{$menuschedule->date}}</h5>
                        <a href="{{ route('admin.menuschedule.edit', $menuschedule->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                      </div>
                      <div class="img-container">
                        <img src="{{asset($menuschedule->menu->image)}}" >
                      </div>
                      <div class="footer">
                          {{$menuschedule->menu->name}}
                      </div>
                    </td>
                  </tr>
              @else
                  <td>
                      <div class="header">
                        <h5>{{$menuschedule->date}}</h5>
                        <a href="{{ route('admin.menuschedule.edit', $menuschedule->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                      </div>
                      <div class="img-container">
                        <img src="{{asset($menuschedule->menu->image)}}" >
                      </div>
                      <div class="footer">
                          {{$menuschedule->menu->name}}
                      </div>
                    </td>
              @endif
          @endforeach
          {{-- @foreach ($menuschedules as $menuschedule)
            @if ($menuschedule->date % 7 == 1)
                <tr>
                  <td>
                    <h5>{{$menuschedule->menu_id}}</h5>
                    {{$menuschedule->menu->name}}
                    <div class="img-container">
                      <img src="{{asset($menuschedule->menu->image)}}" height="100px">
                    </div>
                  </td>
                </tr>
            @endif
          @endforeach --}}
          {{-- @for ($i = 1; $i <= 31; $i++)
              @if ($i % 7 == 1)
                <tr>
                    <td>
                      <h5>{{$i}}</h5>
                      {{($menuschedule->menu->name)}}
                      <img src="{{asset($menuschedule->menu->image) }}" height="100px" style="margin:0;">
                    </td>
              @elseif ($i % 7 == 0)
              <td class="card" style="padding:0;">
                  <h5>{{$i}}</h5>
                  <div style="border-radius:50%; overflow: hidden; width:100px; height:100px; margin: 10px; backgrounD:red">
                      <img src="{{asset($menuschedule->menu->image) }}" height="100px>
                  </div>
                  
                  <div class="card-footer" align=center>
                      {{($menuschedule->menu->name)}}
                  </div>
                </td>
                  </tr>
              @else 
              <td>
                  <h5>{{$i}}</h5>
                  <img src="{{asset($menuschedule->menu->image) }}" height="100px" style="margin:0;">
                </td>
              @endif
          @endfor --}}
        </table>
      </div>
    </div>
  </div>
@endsection
