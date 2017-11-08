@extends('app_template')

@section('title')
  Pemilik
@endsection

@section('page_title')
  Daftar Pemilik
@endsection

@section('head_content')
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3">
        <button class="btn m-b-sm m-r-sm btn-success" onclick="location.href = '{{URL::to('/')}}/owners/create';"><i class="m-r-xs fa fa-plus"></i> Tambahkan Pemilik</button>
      </div>
      <div class="col-md-9">
        <form action = "{{URL::to('/')}}/owners/search" method="GET">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Pemilik" name="query" required> 
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
            <th>Jenis</th>
            <th>No. Telepon</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($owners as $owner)
          <tr>
            <td>{{$owner->id}}</td>
            <td>{{$owner->name}}</td>
            <td>{{$owner->type}}</td>
            <td>{{$owner->telephone}}</td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-warning btn-sm" role="button">Edit</a>
            </td>
            <td>
              <a href="#" class="btn m-b-sm m-r-sm btn-danger btn-sm" role="button">Hapus</a>
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