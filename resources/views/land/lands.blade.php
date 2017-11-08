@extends('app_template')

@section('title')
  Tanah
@endsection

@section('page_title')
  Daftar Tanah
@endsection

@section('head_content')
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3">
        <button class="btn m-b-sm m-r-sm btn-success" onclick="location.href = '{{URL::to('/')}}/lands/create';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Tanah</button>
      </div>
      <div class="col-md-9">
        <form action = "{{URL::to('/')}}/lands/search" method="GET">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Tanah" name="query" required> 
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
        Tabel Tanah
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>ID</th>
                <th>Alamat</th>
                <th>Jenis</th>
                <th>Nilai</th>
                <th>Ukuran</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($lands as $land)
              <tr>
                <td>{{$land->id}}</td>
                <td>{{$land->address}}</td>
                <td>{{$land->function}}</td>
                <td>{{$land->value}}</td>
                <td>{{$land->length}} x {{$land->width}} m</td>
                <td>
                  <a href="#" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
                </td>
                <td>
                  {{ Form::open(array('route' => array('lands.destroy', $land->id), 'method' => 'delete'))}}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
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