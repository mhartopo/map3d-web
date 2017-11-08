@extends('app_template')

@section('title')
  Taman
@endsection

@section('page_title')
  Daftar Taman
@endsection

@section('head_content')
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3">
        <button class="btn m-b-sm m-r-sm btn-success" onclick="location.href = '{{URL::to('/')}}/parks/create';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Taman</button>
      </div>
      <div class="col-md-9">
        <form action = "{{URL::to('/')}}/parks/search" method="GET">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Taman" name="query" required> 
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
        Tabel Taman
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Ukuran</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($parks as $park)
              <tr>
                <td>{{$park->id}}</td>
                <td>{{$park->name}}</td>
                <td>{{$park->address}}</td>
                <td>{{$park->length}} x {{$park->width}} m</td>
                <td>
                  <a href="#" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
                </td>
                <td>
                  {{ Form::open(array('route' => array('parks.destroy', $park->id), 'method' => 'delete'))}}
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