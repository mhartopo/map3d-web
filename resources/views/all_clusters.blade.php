@extends('app_template')

@section('title')
  Kompleks
@stop

@section('content')
  <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Tabel Kompleks
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
            @foreach($clusters as $cluster)
              <tr>
                <td>{{$cluster->id}}</td>
                <td>{{$cluster->name}}</td>
                <td>{{$cluster->type}}</td>
                <td>{{$cluster->address}}</td>
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
@stop