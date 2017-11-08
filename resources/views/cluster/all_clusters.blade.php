@extends('app_template')

@section('title')
  Kompleks
@endsection

@section('page_title')
  Daftar Kompleks
@endsection

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
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Alamat</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($clusters as $cluster)
              <tr>
                <td>{{$cluster->id}}</td>
                <td><a href="{{URL::to('/')}}/clusters/{{$cluster->id}}">{{$cluster->name}}</a></td>
                <td>{{$cluster->type}}</td>
                <td>{{$cluster->address}}</td>
                <td>
                  <a href="#" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
                </td>
                <td>
                  {{ Form::open(array('route' => array('clusters.destroy', $cluster->id), 'method' => 'delete'))}}
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