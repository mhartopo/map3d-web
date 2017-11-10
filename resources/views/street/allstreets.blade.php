@extends('app_template')

@section('title')
  Jalan
@endsection

@section('page_title')
  Daftar Jalan
@endsection

@section('head_content')
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3">
        <button class="btn m-b-sm m-r-sm btn-primary" onclick="location.href = '{{URL::to('/')}}/streets/create';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Jalan</button>
      </div>
      <div class="col-md-9">
        <form action = "{{URL::to('/')}}/streets/search" method="GET">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Jalan" name="query" required> 
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
    <div class="col-md-12">
    </div>
  </div>
  <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Tabel Jalan
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Deskripsi</th>
                <th>Lokasi</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($streets as $street)
              <tr>
                <td>{{$street->id}}</td>
                <td>{{$street->name}}</td>
                <td>{{$street->type}}</td>
                <td>{{$street->description}}</td>
                <td><a target="_blank" href="https://www.google.com/maps/?q={{$street->latitude}},{{$street->longitude}}">Lihat</a></td>
                <td>
                  <a href="{{URL::to('/')}}/streets/{{$street->id}}/edit" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
                </td>
                <td>
                  {{ Form::open(array('route' => array('streets.destroy', $street->id), 'method' => 'delete'))}}
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
      <!-- /.panel-body -->
    </div>
  <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection