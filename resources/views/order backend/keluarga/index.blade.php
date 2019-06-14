@extends('order backend.default')
@section('content')
<style>
    input[type=radio] {
        margin-top: 10px;
        margin-left: 10px;
    }
    .img-container {
        border-radius:50%;
        overflow: hidden;
        width:100px;
        height:100px;
        margin: 10px;
        text-align: center;
      }
    .img-container img {
      height: 100px;
    }
    .schedule tr td{
      padding: 10px 10px 50px;
      position: relative;
    }
    .schedule .header a {
      color: whitesmoke;
      font-size: 12px;
      position: absolute;
      top: 15px;
      right: 10px;
    }
    .schedule tr td:hover .header a {
      color: lightgrey;
    }
    .schedule .footer {
      background: whitesmoke;
      width: 100%;
      padding: 10px 0;
      text-align: center;
      border-top: 1px solid gainsboro;
      position: absolute;
      left: 0;
      bottom: 0;
    }
</style>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Orderan paket keluarga</h1>
    <hr>
    <form action="{{ route('order.saveKeluarga.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" class="container-fluid">
        @csrf            
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Nama Customer</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}" value="{{ old('name') }}" id="name" name="name" placeholder="Nama Customer">
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>  
                </div>  
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="telp">Telp</label>
                    <input type="text" class="form-control {{ $errors->has('telp') ? 'is-invalid' : ' ' }}" value="{{ old('telp') }}" id="telp" name="telp" placeholder="No Telepon">
                    <div class="invalid-feedback">
                        {{ $errors->first('telp') }}
                    </div>  
                </div>  
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ' ' }}" value="{{ old('email') }}" id="email" name="email" placeholder="Email">
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>  
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ' ' }}" value="{{ old('address') }}" id="address" name="address" placeholder="Address">
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>  
                </div>  
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="portion">Portion</label>
                    <i style="float: right; color: cornflowerblue">Min 3 Porsi</i>
                    <input type="number" class="form-control {{ $errors->has('portion') ? 'is-invalid' : ' ' }}" value="{{ old('portion') }}" id="portion" name="portion" placeholder="Portion" min="3">
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="day">Day Count</label>
                    <br>
                    <input type="radio" name="day" id="day5" value="5" checked> 5 Days   
                    <input type="radio" name="day" id="day7" value="7"> 7 Days
                </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group">
                        <label for="deliveryTime">Delivery Time</label>
                        <br>
                        <input type="radio" name="deliveryTime" id="deliveryTime" value="morning" checked> Morning
                        <input type="radio" name="deliveryTime" id="deliveryTime" value="afternoon"> Afternoon
                    </div>
                </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="startFrom">Start From</label>
                    <input type="date" class="form-control {{ $errors->has('stopedAt') ? 'is-invalid' : ' ' }}" value="{{ old('startFrom') }}" id="startFrom" name="startFrom" placeholder="Start From">
                    <div class="invalid-feedback">
                        {{ $errors->first('startFrom') }}
                    </div>  
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="stopedAt">Stoped At</label>
                    <input type="text" class="form-control {{ $errors->has('stopedAt') ? 'is-invalid' : ' ' }}" value="{{ old('stopedAt') }}" id="stopedAt" name="stopedAt" placeholder="Stoped At" readonly>
                    <input type="text" name="stopedAtHide" id="stopedAtHide" value="{{ old('stopedAt') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('stopedAt') }}
                    </div>  
                </div>  
            </div>

            <script>
                $('#startFrom').on('change',function(){
                    var val = $('#startFrom').val();
                    var dayCount = $('input[name=day]:checked').val();
                    if (val) {
                        var set = new Date(val);
                        set.setDate(set.getDate() + Number(dayCount));
                        $('#stopedAt').val([addPrefix(set.getDate()), addPrefix(set.getMonth() + 1), set.getFullYear()].join('/'));
                        $('#stopedAtHide').val([set.getFullYear(), addPrefix(set.getMonth() + 1), addPrefix(set.getDate())].join('-'))
                    }
                });

                $('#day5').on('change',function(){    
                    var val = $('#startFrom').val();
                    var dayCount = $('input[name=day]:checked').val();
                    if (val) {
                        var set = new Date(val);
                        set.setDate(set.getDate() + Number(dayCount));
                        $('#stopedAt').val([addPrefix(set.getDate()), addPrefix(set.getMonth() + 1), set.getFullYear()].join('/'));
                    }
                });
                $('#day7').on('change',function(){    
                    var val = $('#startFrom').val();
                    var dayCount = $('input[name=day]:checked').val();
                    if (val) {
                        var set = new Date(val);
                        set.setDate(set.getDate() + Number(dayCount));
                        $('#stopedAt').val([addPrefix(set.getDate()), addPrefix(set.getMonth() + 1), set.getFullYear()].join('/'));
                    }
                });

                function addPrefix(str) {
                    return('0' + str).slice(-2);
                }
            </script>
            <div class="col-md-1" style="padding-top: 30px;">
                <div class="btn btn-info" id="checkPrice" style="cursor: pointer;">Check</div>
            </div>
            <script>
                $('#checkPrice').on('click',function() {
                    var portion = $('input[name=portion]').val();
                    var days = $('input[name=day]:checked').val();
                    var price = portion * days * 20000;
                    $('#price').text(price);
                    $('#txtPrice').val(price);
                    $('#orderButton').css('opacity','1');
                    $('#orderButton').prop('disabled',false);
                });
            </script>
            <div class="col-md-2">
                <label for="price">Price (Rp)</label>
                <h3 id="price">0</h3>
                <input type="hidden" name="price" id="txtPrice">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding: 0;">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" id="orderButton" value="Order" style="width: 100%; padding: 15px 0%; margin: 0; font-size: 26px;letter-spacing: 2px; font-weight: bold; margin-top: 10px; opacity: 0; transition: 0.5s;" disabled>
                </div>
            </div>
        </div>
        <hr>
        <style>
            #menuSchedule .card {
                width: 100%;
                margin: 10px 0;
                text-align: center;
                display: inline-table;
                position: relative;
            }
        </style>
        <h4>Menus</h4>
        <table class="table table-bordered schedule"  id="dataTable" width="100%" cellspacing="0">
        @foreach ($menuschedules as $menuschedule)
              @if ($menuschedule->date % 7 == 1)
                  <tr>
                    <td>
                      <div class="header">
                        <h5>{{$menuschedule->date}}</h5>
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
        </table>
    </form>  
</div>

@endsection
