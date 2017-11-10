@extends('app_template')

@section('title')
  Bangunan
@endsection

@section('page_title')
  Daftar Bangunan
@endsection

@section('head_content')
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3">
        <button class="btn m-b-sm m-r-sm btn-primary" onclick="location.href = '{{URL::to('/')}}/buildings/create';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Bangunan</button>
      </div>
      <div class="col-md-9">
        <form action = "{{URL::to('/')}}/buildings/search" method="GET">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Bangunan" name="query" required> 
            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit">Go!</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


@section('content')
  <div class="row">
  <div class="col-lg-12">
    <div class="dataTable_wrapper">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Fungsi</th>
            <th>Alamat</th>
            <th>Nilai Jual</th>
            <th>Lokasi</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($buildings as $building)
          <tr>
            <td>{{$building->id}}</td>
            <td>{{$building->name}}</td>
            <td>{{$building->function}}</td>
            <td>{{$building->address}}</td>
            <td>Rp. {{$building->value}}</td>
            <td><a target="_blank" href="https://www.google.com/maps/?q={{$building->latitude}},{{$building->longitude}}">Lihat</a></td>
            <td>
              <a href="{{URL::to('/')}}/buildings/{{ $building->id }}/edit" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              {{ Form::open(array('route' => array('buildings.destroy', $building->id), 'method' => 'delete'))}}
                    {{ Form::submit('Hapus', ['class' => 'btn m-b-sm m-r-sm btn-danger btn-sm']) }}
                  {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
        <!-- /.table-responsive -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection